<?php

namespace App\Form;

use App\Entity\Cliente;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ClienteType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nome', TextType::class)
            ->add('cpf', TextType::class, ['label' => 'CPF'], ['attr' => ['maxlenght' => 11]])
            ->add('endereco', TextType::class, ['label' => 'Endereço'])
            ->add('bairro')
            ->add('cidade')
            ->add('estado')
            ->add('cep', TextType::class, ['label' => 'CEP'], ['attr' => ['maxlenght' => 8]])
            ->add('telefone', TelType::class)
            ->add('email', EmailType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Cliente::class,
        ]);
    }
}
