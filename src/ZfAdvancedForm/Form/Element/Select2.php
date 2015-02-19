<?php

namespace ZfAdvancedForm\Form\Element;

use Zend\Form\ElementInterface;
use Zend\ServiceManager\ServiceLocatorAwareInterface;
use Zend\ServiceManager\ServiceLocatorInterface;
use Zend\Form\Element;
use Zend\InputFilter\InputProviderInterface;
use Zend\Validator\Regex as RegexValidator;
use Zend\View\Model\ViewModel;
use Zend\View\Renderer\PhpRenderer;

class Select2 extends Element implements InputProviderInterface
{



    /**
     * @var ValidatorInterface
     */
    protected $validator;

    /**
     * Get a validator if none has been set.
     *
     * @return ValidatorInterface
     */
    public function getValidator()
    {
        if (null === $this->validator) {
            $validator = new RegexValidator('/[0-9a-fA-F]{6}$/');
            $validator->setMessage('Please enter caracters alpha!',
                RegexValidator::NOT_MATCH);

            $this->validator = $validator;
        }

        return $this->validator;
    }

    /**
     * Sets the validator to use for this element
     *
     * @param  ValidatorInterface $validator
     * @return $this
     */
    public function setValidator(ValidatorInterface $validator)
    {
        $this->validator = $validator;
        return $this;
    }

    /**
     * Provide default input rules for this element
     *
     * Attaches a phone number validator.
     *
     * @return array
     */
    public function getInputSpecification()
    {
        return array(
            'name' => $this->getName(),
            'required' => true,
            'filters' => array(
                array('name' => 'Zend\Filter\StringTrim'),
            ),

            'validators' => array(
                $this->getValidator(),
            ),
        );
    }


    public function init()
    {
        $this->setAttribute('class', 'select2');
        $this->setAttribute('route', '/project/buscar');
        //$this->getTemplate();
    }


    /**
     * Set a single option for an element
     *
     * @param  string $key
     * @param  mixed $value
     * @return self
     */
    public function setOption($key, $value)
    {
        // TODO: Implement setOption() method.
    }
}
