ZfAdvancedForms
================

Installation
---------------

1 - Install the module via composer by running:

```

    composer require ZFLabs/ZfAdvancedForm:dev-master
    
 ````

2 - Add the ZfAdvancedForm module to the module section of your config/application.config.php

Using the Select2
---------------------

- Using in you form

```
 
     $this->add(array(
         'name' => 'address',
         'type' => 'Select2',
     ))

     or
     
     $this->add(array(
          'name' => 'address',
          'type' => 'ZfAdvancedForm\Form\Element\Select2',

      ));
      
 ````
 
 - Using in you View

```

      $form = $this->form;
      $form->setAttribute('action', $this->url('default', array('action' => 'envite')));
      $form->prepare();
      
      echo $this->form()->openTag($form);
      echo $this->select2Row($form->get('address'));
      echo $this->form()->closeTag();

````

