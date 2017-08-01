<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Operador
 *
 *@Table(name="operador", uniqueConstraints={@ORM\UniqueConstraint(name="USUARIO_UNIQUE", columns={"USUARIO"})})
 *@Entity
 */
class Operador
{
    /**
     * @var int
     *
     *@Column(name="IDOPERADOR", type="integer", nullable=false)
     *@Id
     *@GeneratedValue(strategy="IDENTITY")
     */
    private $idoperador;

    /**
     * @var string
     *
     *@Column(name="NOME", type="string", length=100, nullable=false)
     */
    private $nome;

    /**
     * @var string
     *
     *@Column(name="SOBRENOME", type="string", length=45, nullable=false)
     */
    private $sobrenome;

    /**
     * @var string
     *
     *@Column(name="USUARIO", type="string", length=100, nullable=false)
     */
    private $usuario;

    /**
     * @var string
     *
     *@Column(name="SENHA", type="string", length=300, nullable=false)
     */
    private $senha;

    /**
     * @var \DateTime
     *
     *@Column(name="DTCADASTRO", type="datetime", nullable=false)
     */
    private $dtcadastro;

    /**
     * @var string
     *
     *@Column(name="PERMISSAO", type="string", length=45, nullable=false)
     */
    private $permissao;


}
