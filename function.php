<?php

function selectPlayer($id, $pdo)
{
    $res = $pdo->prepare("SELECT * FROM joueurs WHERE id = :id");
    $res->execute(['id' => $id]);
    $user = $res->fetch();

    return $user;
}
