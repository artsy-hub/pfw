<?php
  ////////////////////////////////////////////////////////////////
  // Cat C 論理モデル
  ////////////////////////////////////////////////////////////////
  class Catc
  {
    /*
     * 変数宣言
     */
    public $data = [];

    /*
     * コンストラクタ
     */

    /*
     * Objects Categories の外部結合 ( LEFT JOIN )
     * categories テーブルのカテゴリ名と Objects テーブルの全データを抽出
     */
    public function list()
    {
      $Objs = new Objects();
      $data = $Objs->outerjoin(); //  カテゴリ名を含めた Objects テーブルのデータ

      return $data;
    }

  }
?>