<?php

// ここにコードを書いていきます
require_once __DIR__ . '/Car.php';

class Taxi extends Car
{
    // 現在の乗車人数を管理する
    private $passenger;
    private $pickUp;
    private $lower;

    // passenger　現在の乗車人数
    public function setPassenger($passenger)
    {
        $this->passenger = $passenger;
    }
    public function getPassenger()
    {
        return $this->passenger;
    }

    // pickup
    // 再定義する（オーバーライド）
    public function pickUp($count)
    {
        $this->passenger += $count;
        echo "$count 人乗車しました" . PHP_EOL;
    }
    // public function setPickUp($pickUp)
    // {
    //     $this->pickUp = $pickUp;
    // }
    // public function getPickUp()
    // {
    //     return $this->pickUp;
    // }

    // lowerメソッド
    // 再定義する（オーバーライド）
    public function lower($count)
    {
        if ($count <= $this->passenger) {
            $this->passenger -= $count;
            echo "$count 人降車しました" . PHP_EOL;
        } else {
            echo "{$count}人は降車できません";
        }
        // $this->passenger -= $count;
        // echo "$count 人降車しました\n";
    }


    // public function setLower($lower)
    // {
    //     $this->lower = $lower;
    // }
    // public function getLower()
    // {
    //     return $this->lower;
    // }


    public function Information()
    {
        return "車の車種：{$this->name}" . PHP_EOL .
            "車体番号：{$this->number}" . PHP_EOL .
            "カラー：{$this->color}" . PHP_EOL .
            "乗車人数：{$this->passenger}人" . PHP_EOL;
    }
}
