<?php

class ZangeresModel
{
    private $db;

    public function __construct()
    {
        
        $this->db = new Database();
    }

    public function getAllZangeressen()
    {
        $sql = 'SELECT  Z.Id
                       ,Z.Naam
                       ,FORMAT(Z.Nettowaarde, 0, "nl_NL") as Nettowaarde
                       ,Z.Land
                       ,Z.Mobiel
                       ,Z.Leeftijd
                       ,IF(Z.IsActief = 1, "Ja", "Nee") as IsActief
                       ,Z.Opmerking
                       ,DATE_FORMAT(Z.DatumAangemaakt, "%d-%m-%Y %H:%i:%s") as DatumAangemaakt
                       ,DATE_FORMAT(Z.DatumGewijzigd, "%d-%m-%Y %H:%i:%s") as DatumGewijzigd
                FROM Zangeres AS Z
                ORDER BY Z.Leeftijd DESC';

        $this->db->query($sql);

        return $this->db->resultSet();
    }
}
