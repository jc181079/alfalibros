<?php

namespace principalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PhpposAppFiles
 *
 * @ORM\Table(name="phppos_app_files")
 * @ORM\Entity
 */
class PhpposAppFiles
{
    /**
     * @var string
     *
     * @ORM\Column(name="file_name", type="string", length=255, nullable=false)
     */
    private $fileName;

    /**
     * @var string
     *
     * @ORM\Column(name="file_data", type="blob", nullable=false)
     */
    private $fileData;

    /**
     * @var integer
     *
     * @ORM\Column(name="file_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $fileId;



    /**
     * Set fileName
     *
     * @param string $fileName
     *
     * @return PhpposAppFiles
     */
    public function setFileName($fileName)
    {
        $this->fileName = $fileName;

        return $this;
    }

    /**
     * Get fileName
     *
     * @return string
     */
    public function getFileName()
    {
        return $this->fileName;
    }

    /**
     * Set fileData
     *
     * @param string $fileData
     *
     * @return PhpposAppFiles
     */
    public function setFileData($fileData)
    {
        $this->fileData = $fileData;

        return $this;
    }

    /**
     * Get fileData
     *
     * @return string
     */
    public function getFileData()
    {
        return $this->fileData;
    }

    /**
     * Get fileId
     *
     * @return integer
     */
    public function getFileId()
    {
        return $this->fileId;
    }
}
