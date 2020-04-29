<?php
use Illuminate\Support\Str;

/**
 * Get an excerpt
 *
 * @param string $content The content to be transformed
 * @param int    $length  The number of words
 * @param string $more    The text to be displayed at the end, if shortened
 * @return string
 */
function get_excerpt( $content, $length = 40, $more = '...' ) {
    $excerpt = strip_tags( trim( $content ) );
    $words = str_word_count( $excerpt, 2 );
    if ( count( $words ) > $length ) {
        $words = array_slice( $words, 0, $length, true );
        end( $words );
        $position = key( $words ) + strlen( current( $words ) );
        $excerpt = substr( $excerpt, 0, $position ) . $more;
    }
    return $excerpt;
}

/**
 * Handle both chinese and english mix content
 *
 * @param string $content The content to be transformed
 * @param int    $length  The number of words
 * @param string $more    The text to be displayed at the end, if shortened
 * @return string
 */
function news_get_excerpt($content, $length = 80, $more = '...')
{
    $excerpt = strip_tags( trim( $content ) );
    $str = preg_match_all('/\p{Hangul}|\p{Hiragana}|\p{Han}|\p{Katakana}|(\p{Latin}+)|(\p{Cyrillic}+)|(\W+)|([0-9]+)/u', $excerpt, $org_words);
    $org_words = $org_words[0] ?? str_word_count( $excerpt, 2 );
    $space=0;
    $count=0;

    if ( count( $org_words) > $length ) {
        $words = array_slice( $org_words, 0, $length, true );
        end( $words );
        foreach($words as $word){
            if(trim($word)){
                $space++;
            }
        }
        if( $space > 0 ){
            $words = array_slice( $org_words, 0, $length + $space, true );
        }
        if(!trim(last($words))){
            array_pop($words);
        }
        array_push($words, $more);

        $excerpt = implode('', $words);
    }
    return $excerpt;

}

function mb_get_excerpt( $content, $length = 80, $more = '...') {
    $excerpt = strip_tags( trim( $content ) );

    if ( mb_strlen($excerpt) > $length ) {
        return mb_substr( $excerpt, 0, $length). $more;
    } else {
        return $excerpt;
    }

}



function bytesToHuman($bytes, $precision = 2)
{
    $units = [' bytes', ' KB', ' MB', ' GB', ' TB'];

    for ($i = 0; $bytes > 1024; $i++) {
        $bytes /= 1024;
    }

    return round($bytes, $precision) . $units[$i];
}
