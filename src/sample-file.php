<?php
declare(strict_types=1);

namespace DL\Entity;

/**
 * Class ContactDto.
 *
 * @package DL\Entity
 * @author  ${author}
 */
class ContactDto
{
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string")
     * @Assert\Type("string")
     *
     * @JMS\Type("string")
     * @JMS\Groups({"get","create","update"})
     */
    protected $name;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string")
     * @Assert\Type("string")
     *
     * @JMS\Type("string")
     * @JMS\Groups({"get","create","update"})
     */
    protected $email;

    /**
     * @var string
     *
     * @ORM\Column(name="message", type="string")
     * @Assert\Type("string")
     *
     * @JMS\Type("string")
     * @JMS\Groups({"get","create","update"})
     */
    protected $message;
    
    /**
     * Get the value of the name property.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    
    /**
     * Set the value of the name property.
     *
     * @param string $name
     *
     * @return ContactDto
     */
    public function setName(string $name): ContactDto
    {
        $this->name = $name;
        
        return $this;
    }
    
    /**
     * Get the value of the email property.
     *
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }
    
    /**
     * Set the value of the email property.
     *
     * @param string $email
     *
     * @return ContactDto
     */
    public function setEmail(string $email): ContactDto
    {
        $this->email = $email;
        
        return $this;
    }
    
    /**
     * Get the value of the message property.
     *
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
    }
    
    /**
     * Set the value of the message property.
     *
     * @param string $message
     *
     * @return ContactDto
     */
    public function setMessage(string $message): ContactDto
    {
        $this->message = $message;
        
        return $this;
    }
}
