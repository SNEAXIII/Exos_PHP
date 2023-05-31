<?php
class EmprunterLivreReponse{
    public int $status;
    public string $message;

    /**
     * @param int $status
     * @param string $message
     */
    public function __construct(int $status, string $message)
    {
        $this -> status = $status;
        $this -> message = $message;
    }

}