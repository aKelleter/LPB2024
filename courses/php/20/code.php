<?php

/**
 *  La gestion des execeeptions en PHP
 *  **********************************
 * 
 * La version 5 de PHP a introduit une nouvelle façon de gérer la plupart des erreurs en utilisant de qu’on appelle 
 * des exceptions. Cette nouvelle façon de procéder se base sur le PHP orienté objet et sur la classe Exception. 
 * L’idée ici va être de créer ou de « lancer » un nouvel objet Exception lorsqu’une erreur spécifique est détectée. 
 * 
 * Dès qu’une exception est lancée, le script va suspendre son exécution et le PHP va chercher un endroit dans 
 * le script où l’exception va être « attrapée ». 
 * 
 * Utiliser des exceptions va nous permettre de gérer les erreurs de manière plus fluide et de personnaliser 
 * la façon dont un script doit gérer certaines erreurs. 
 * 
 * Notez que quasiment tous les langages serveurs utilisent le concept d’exceptions pour prendre en charge 
 * les erreurs car c’est la meilleure façon de procéder à ce jour. 
 * 
 * En pratique, la gestion d’une erreur via une exception va se faire en trois temps : 
 *   1. On va définir quand une exception doit être lancée avec une instruction throw
 *   2. On va créer un bloc catch dont le but va être d’attraper l’exception si celle-ci a été lancée et de définir la façon dont doit être gérée l’erreur
 *   3. On va utiliser un bloc try dans lequel le code qui peut potentiellement retourner une erreur va être exécuté
 * 
 */

 echo '<a href="../pgms/09.exceptions/">Accéder au PGM : Exceptions</a>';




