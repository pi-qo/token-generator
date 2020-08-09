<?php

namespace PiQo;

/**
 * Set of tools to work with a token
 */
class Token
{
    /**
     * The token we are working with
     * 
     * @var string
     */
    protected $token;

    public function __construct(int $length = 32)
    {
        // Generate a token with the supplied length
        $this->token = random_bytes($length);
    }

    /**
     * Get the token in hex format
     * 
     * Note that the hex length is twice the bytes length
     * 
     * @return string
     */
    public function getHex(): string
    {
        return bin2hex($this->token);
    }

    /**
     * Get the token as it has been generated
     * 
     * @return string
     */
    public function getRaw(): string
    {
        return $this->token;
    }
}