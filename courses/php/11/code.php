<?php

/**
 * PHP et le typage (réf : p118)
 * 
 * PHP est un langage qui ne possède pas un typage fort.
 * 
 * Cela signifie de manière concrète qu’on n’a pas besoin de spécifier le type de données 
 * attendues lorsqu’on définit des paramètres pour une fonction car le PHP va déterminer 
 * lui-même le type des données passées à notre fonction en fonction de leur valeur. 
 * 
 * Une conséquence de cela est qu’il va être possible de passer des arguments qui n’ont aucun 
 * sens à une fonction sans déclencher d’erreur. On va par exemple pouvoir parfaitement 
 * passer deux chaines de caractères à notre fonction addition() créée dans la leçon 
 * précédente sans déclencher d’erreur. 
 * 
 * Depuis sa dernière version majeure (PHP7), le PHP nous offre néanmoins la possibilité de 
 * préciser le type de données attendues lorsqu’on définit une fonction. Si une donnée passée 
 * ne correspond pas au type attendu, le PHP essaiera de la convertir dans le bon type et 
 * s’il n’y arrive pas une erreur sera cette fois-ci renvoyée. 
 * 
 * Cela va permettre à nos fonctions de ne s’exécuter que si les valeurs passées en argument
 * sont valides et donc d’obtenir toujours un résultat cohérent par rapport à nos attentes. 
 * 
 * Quelques types valides : string, int, float, bool, array, ...
 * 
 * ALLER SUR pgms/04.strict_types/
 */

