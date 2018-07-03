<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'form.registry' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/FormExtensionInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Extension/DependencyInjection/DependencyInjectionExtension.php';
include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/FormRegistryInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/FormRegistry.php';

return $this->services['form.registry'] = new \Symfony\Component\Form\FormRegistry(array(0 => new \Symfony\Component\Form\Extension\DependencyInjection\DependencyInjectionExtension(new \Symfony\Component\DependencyInjection\ServiceLocator(array('AppBundle\\Form\\EquipmentType' => function () {
    return ${($_ = isset($this->services['AppBundle\Form\EquipmentType']) ? $this->services['AppBundle\Form\EquipmentType'] : $this->services['AppBundle\Form\EquipmentType'] = new \AppBundle\Form\EquipmentType()) && false ?: '_'};
}, 'AppBundle\\Form\\ReservationEquipmentType' => function () {
    return ${($_ = isset($this->services['AppBundle\Form\ReservationEquipmentType']) ? $this->services['AppBundle\Form\ReservationEquipmentType'] : $this->services['AppBundle\Form\ReservationEquipmentType'] = new \AppBundle\Form\ReservationEquipmentType()) && false ?: '_'};
}, 'AppBundle\\Form\\ReservationType' => function () {
    return ${($_ = isset($this->services['AppBundle\Form\ReservationType']) ? $this->services['AppBundle\Form\ReservationType'] : $this->services['AppBundle\Form\ReservationType'] = new \AppBundle\Form\ReservationType()) && false ?: '_'};
}, 'AppBundle\\Form\\RoomType' => function () {
    return ${($_ = isset($this->services['AppBundle\Form\RoomType']) ? $this->services['AppBundle\Form\RoomType'] : $this->services['AppBundle\Form\RoomType'] = new \AppBundle\Form\RoomType()) && false ?: '_'};
}, 'AppBundle\\Form\\SignatureType' => function () {
    return ${($_ = isset($this->services['AppBundle\Form\SignatureType']) ? $this->services['AppBundle\Form\SignatureType'] : $this->services['AppBundle\Form\SignatureType'] = new \AppBundle\Form\SignatureType()) && false ?: '_'};
}, 'AppBundle\\Form\\StaffType' => function () {
    return ${($_ = isset($this->services['AppBundle\Form\StaffType']) ? $this->services['AppBundle\Form\StaffType'] : $this->services['AppBundle\Form\StaffType'] = new \AppBundle\Form\StaffType()) && false ?: '_'};
}, 'Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType' => function () {
    return ${($_ = isset($this->services['form.type.entity']) ? $this->services['form.type.entity'] : $this->load('getForm_Type_EntityService.php')) && false ?: '_'};
}, 'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType' => function () {
    return ${($_ = isset($this->services['form.type.choice']) ? $this->services['form.type.choice'] : $this->load('getForm_Type_ChoiceService.php')) && false ?: '_'};
}, 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType' => function () {
    return ${($_ = isset($this->services['form.type.form']) ? $this->services['form.type.form'] : $this->load('getForm_Type_FormService.php')) && false ?: '_'};
}, 'Vich\\UploaderBundle\\Form\\Type\\VichFileType' => function () {
    return ${($_ = isset($this->services['vich_uploader.form.type.file']) ? $this->services['vich_uploader.form.type.file'] : $this->load('getVichUploader_Form_Type_FileService.php')) && false ?: '_'};
}, 'Vich\\UploaderBundle\\Form\\Type\\VichImageType' => function () {
    return ${($_ = isset($this->services['vich_uploader.form.type.image']) ? $this->services['vich_uploader.form.type.image'] : $this->load('getVichUploader_Form_Type_ImageService.php')) && false ?: '_'};
})), array('Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType' => new RewindableGenerator(function () {
    yield 0 => ${($_ = isset($this->services['form.type_extension.form.http_foundation']) ? $this->services['form.type_extension.form.http_foundation'] : $this->load('getForm_TypeExtension_Form_HttpFoundationService.php')) && false ?: '_'};
    yield 1 => ${($_ = isset($this->services['form.type_extension.form.validator']) ? $this->services['form.type_extension.form.validator'] : $this->load('getForm_TypeExtension_Form_ValidatorService.php')) && false ?: '_'};
    yield 2 => ${($_ = isset($this->services['form.type_extension.upload.validator']) ? $this->services['form.type_extension.upload.validator'] : $this->load('getForm_TypeExtension_Upload_ValidatorService.php')) && false ?: '_'};
    yield 3 => ${($_ = isset($this->services['form.type_extension.csrf']) ? $this->services['form.type_extension.csrf'] : $this->load('getForm_TypeExtension_CsrfService.php')) && false ?: '_'};
    yield 4 => ${($_ = isset($this->services['form.type_extension.form.data_collector']) ? $this->services['form.type_extension.form.data_collector'] : $this->load('getForm_TypeExtension_Form_DataCollectorService.php')) && false ?: '_'};
}, 5), 'Symfony\\Component\\Form\\Extension\\Core\\Type\\RepeatedType' => new RewindableGenerator(function () {
    yield 0 => ${($_ = isset($this->services['form.type_extension.repeated.validator']) ? $this->services['form.type_extension.repeated.validator'] : $this->services['form.type_extension.repeated.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\RepeatedTypeValidatorExtension()) && false ?: '_'};
}, 1), 'Symfony\\Component\\Form\\Extension\\Core\\Type\\SubmitType' => new RewindableGenerator(function () {
    yield 0 => ${($_ = isset($this->services['form.type_extension.submit.validator']) ? $this->services['form.type_extension.submit.validator'] : $this->services['form.type_extension.submit.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\SubmitTypeValidatorExtension()) && false ?: '_'};
}, 1)), new RewindableGenerator(function () {
    yield 0 => ${($_ = isset($this->services['form.type_guesser.validator']) ? $this->services['form.type_guesser.validator'] : $this->load('getForm_TypeGuesser_ValidatorService.php')) && false ?: '_'};
    yield 1 => ${($_ = isset($this->services['form.type_guesser.doctrine']) ? $this->services['form.type_guesser.doctrine'] : $this->load('getForm_TypeGuesser_DoctrineService.php')) && false ?: '_'};
}, 2), NULL)), ${($_ = isset($this->services['form.resolved_type_factory']) ? $this->services['form.resolved_type_factory'] : $this->load('getForm_ResolvedTypeFactoryService.php')) && false ?: '_'});
