<?php
require_once __DIR__. '/../Connexion.class.php';
/**
 * @param string $sql // represents the SQL query
 * @param mixed $parameters // represents the parameters of the query if not empty else type
 * @param string $type // represents the type of SQL query among the 4 propositions : select /update / insert / delete
 * @return bool|PDOStatement|void
 */
function Query(string $sql, array $parameters =[], string $type = "select")
{
    if (isset($_SESSION) && !empty($_SESSION)) {
            $connexion_admin = new Connexion("root", "");
            $connexion = $connexion_admin->getConnexion();
        if ($type !== "select") {
            $requete = $connexion->prepare($sql);
            return $requete->execute($parameters);
        } else {
            if ($parameters == []) {
                return $connexion->query($sql);
            } else {
                try {
                    $requete = $connexion->prepare($sql);
                    $requete->execute($parameters);
                    return $requete;
                } catch (Exception $e) {
                    echo 'there is a problem with the select parameters' . $e->getMessage();
                }
            }
        }
    } else {
        die("pas de session pas de requete ...");
    }
}
