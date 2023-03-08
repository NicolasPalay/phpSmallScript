<?php
function hiddenMessage($message): string{
    $messageLen = strlen($message)/2;
    $subChain = substr($message,5,$messageLen);
    $subChain = str_replace(array('@','#', '?'), " ", $subChain);
    $subChain = strrev($subChain);
    return $subChain;
}
echo hiddenMessage("@sn9sirppa@#?ia'jgtvryko1") . "<br>";
echo hiddenMessage("q8e?wsellecif@#?sel@#?setuotpazdsy0*b9+mw@x1vj") . "<br>";
echo hiddenMessage("aopi?sgnirts@#?sedhtg+p9l!");