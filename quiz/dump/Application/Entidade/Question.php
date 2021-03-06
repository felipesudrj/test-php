<?php

namespace Application\Entidade;

/**
 * Question
 */
class Question
{
    /**
     * @var string
     */
    private $subject;

    /**
     * @var \DateTime
     */
    private $createdAt;

    /**
     * @var \DateTime
     */
    private $updatedAt;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \Application\Entidade\Quiz
     */
    private $quiz;

    /**
     * @var \Application\Entidade\TypeQuestion
     */
    private $type;


    /**
     * Set subject
     *
     * @param string $subject
     *
     * @return Question
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;

        return $this;
    }

    /**
     * Get subject
     *
     * @return string
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return Question
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     *
     * @return Question
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set quiz
     *
     * @param \Application\Entidade\Quiz $quiz
     *
     * @return Question
     */
    public function setQuiz(\Application\Entidade\Quiz $quiz = null)
    {
        $this->quiz = $quiz;

        return $this;
    }

    /**
     * Get quiz
     *
     * @return \Application\Entidade\Quiz
     */
    public function getQuiz()
    {
        return $this->quiz;
    }

    /**
     * Set type
     *
     * @param \Application\Entidade\TypeQuestion $type
     *
     * @return Question
     */
    public function setType(\Application\Entidade\TypeQuestion $type = null)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return \Application\Entidade\TypeQuestion
     */
    public function getType()
    {
        return $this->type;
    }
}

