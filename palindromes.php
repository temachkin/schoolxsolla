<?php
/**
 * Created by PhpStorm.
 * User: tema
 * Date: 23.06.16
 * Time: 16:10
 */

function isPalindrome($w){
    $w = mb_strtolower(trim($w));

    //костыль для русских слов т.к. функция strrev не умеет работать с многобайтными кодировками
    for ($i=0;$i<=mb_strlen($w);$i++){
        $ar[$i] = mb_substr($w,$i,1);
    }
    $ar2 = array_reverse($ar);
    $w2 = implode("",$ar2);

    if($w == $w2){
        return 1;
    }
    return 0;
}

$data = json_decode(file_get_contents('php://input'));
$palindromes = array();

foreach ($data as $v){
    if(isPalindrome($v)){
        $palindromes[] = $v;
    }
}
echo json_encode($palindromes,JSON_UNESCAPED_UNICODE);
