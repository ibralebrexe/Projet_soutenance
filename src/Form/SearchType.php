<?php

namespace App\Form;

use App\Entity\Activity;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use App\Controller\HomeController;
use App\Entity\Pays;


// class SearchType extends AbstractType
// {
//     public function buildForm(FormBuilderInterface $builder, array $options)
//     {
//         $builder
//         ->add('pays', EntityType::class, [
//             "class" => 'Pays'::class,
//         ])
//         ->add('ville', EntityType::class, [
//             "class" => 'Ville'::class,
//             "choice_label" => "name"
//         ])
//         ->add('activite', EntityType::class, [
//             "class" => 'Activity'::class,
//             "choice_label" => "name"
//         ]);
//     }  
// }
