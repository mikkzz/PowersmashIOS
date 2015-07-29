<?php

use Doctrine\ORM\Mapping\ClassMetadataInfo;

$metadata->setInheritanceType(ClassMetadataInfo::INHERITANCE_TYPE_NONE);
$metadata->setChangeTrackingPolicy(ClassMetadataInfo::CHANGETRACKING_DEFERRED_IMPLICIT);
$metadata->mapField(array(
   'fieldName' => 'id',
   'type' => 'integer',
   'id' => true,
   'columnName' => 'id',
  ));
$metadata->mapField(array(
   'columnName' => 'First_Name',
   'fieldName' => 'firstName',
   'type' => 'string',
   'length' => '100',
  ));
$metadata->mapField(array(
   'columnName' => 'Last_Name',
   'fieldName' => 'lastName',
   'type' => 'string',
   'length' => '100',
  ));
$metadata->mapField(array(
   'columnName' => 'age',
   'fieldName' => 'age',
   'type' => 'integer',
  ));
$metadata->mapField(array(
   'columnName' => 'dob',
   'fieldName' => 'dob',
   'type' => 'datetime',
  ));
$metadata->mapField(array(
   'columnName' => 'email',
   'fieldName' => 'email',
   'type' => 'string',
   'length' => '100',
  ));
$metadata->setIdGeneratorType(ClassMetadataInfo::GENERATOR_TYPE_AUTO);