<?php
function siNoteEstCorrecte($note) {
    if ($note >= 0 || $note <= 20) {
        return true;
    }
    return false;
}
echo siNoteEstCorrecte("test");
echo siNoteEstCorrecte("5");
echo siNoteEstCorrecte("-5");
echo siNoteEstCorrecte("20");
echo siNoteEstCorrecte("0");
echo siNoteEstCorrecte(5);