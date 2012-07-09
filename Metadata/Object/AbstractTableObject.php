<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/zf2 for the canonical source repository
 * @package   Zend_Db
 */

namespace Zend\Db\Metadata\Object;

/**
 * @category   Zend
 * @package    Zend_Db
 * @subpackage Metadata
 */
abstract class AbstractTableObject
{

    /*
    protected $catalogName = null;
    protected $schemaName = null;
    */

    /**
     *
     * @var string
     */
    protected $name = null;

    /**
     *
     * @var string
     */
    protected $type = null;

    /**
     *
     * @var array
     */
    protected $columns = null;

    /**
     *
     * @var array
     */
    protected $constraints = null;

    /**
     * Constructor
     * 
     * @param string $name 
     */
    public function __construct($name)
    {
        if ($name) {
            $this->setName($name);
        }
    }

    /**
     * Set columns
     * 
     * @param array $columns 
     */
    public function setColumns(array $columns)
    {
        $this->columns = $columns;
    }

    /**
     * Get columns
     * 
     * @return array 
     */
    public function getColumns()
    {
        return $this->columns;
    }

    /**
     * Set constraints
     * 
     * @param array $constraints 
     */
    public function setConstraints($constraints)
    {
        $this->constraints = $constraints;
    }

    /**
     * Get constraints
     * 
     * @return array 
     */
    public function getConstraints()
    {
        return $this->columns;
    }

    /**
     * Set name
     * 
     * @param string $name 
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Get name
     * 
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }
}
