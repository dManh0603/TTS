<?php
if (!empty($_POST['texttospeech'])) {
    $word = $_POST['texttospeech'];
    $voice = new COM("SAPI.SpVoice");
    $voice->Speak($word);
}