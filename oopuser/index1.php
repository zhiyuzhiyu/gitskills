<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/6/5 0005
 * Time: 15:58
 */
include "Computer.class.php";
include "DesktopComputer.class.php";
include "NotebookComputer.class.php";
include "Person.class.php";

$person = new Person ();
$desktopcomputer = new desktopComputer ();
$notebookcomputer = new NoteBookComputer ();
$person->run ( $notebookcomputer );

