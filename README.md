# EC-CUBE4.2用 Google Merchant Center用 RSS作成プラグイン

Google Merchant Centerに商品を登録するためのRSSフィードを作成するプラグイン

## 商品データ仕様

[商品データ仕様 - Google Merchant Center ヘルプ](https://support.google.com/merchants/answer/7052112)

### 商品基本情報

| 属性名 | 対応(○/-) | 対象データ |
| ----- | ----- | ----- |
| ID [id]* | ○ | 商品規格ID ProductClass.code |
| タイトル [title]* | ○ | 商品名 Product.name |
| 商品説明 [description]* | ○ | 商品説明(一覧) Product.description_list | 
| 商品リンク [link]* | ○ | 商品ページURL |
| 商品画像リンク [image_link]* | ○ | 商品画像 Product.main_list_image |
| 追加の商品画像リンク [additional_image_link] | - | |
| モバイルリンク [mobile_link] | - | |

### 価格と在庫状況

| 属性名 | 対応(○/-) | 対象データ |
| ----- | ----- | ----- |
| 在庫状況 [availability]* | ○ | 無制限または0以上の場合 in_stock それ以外 out_of_stock <br> （preorder , backorder は非対応） |
| 入荷予定日 [availability_date]*1 | - | |
| 売上原価 [cost_of_goods_sold] | - | |
| 有効期限 [expiration_date] | - | |
| 価格 [price]* | ○ | 販売価格 ProductClass.price02_inc_tax |
| セール価格 [sale_price] | - | |
| セール価格有効期間[sale_price_effective_date] | - | |
| 価格の計量単位[unit_pricing_measure] | - | |
| 価格の基準計量単位[unit_pricing_base_measure] | - | |
| 分割払い [installment] | - | |
| 定期購入の費用 [subscription_cost] | - | |
| ポイント [loyalty_points] | - | |

*1 Required 商品の在庫状況が preorder または backorder に設定されている場合は必須です。


### 商品カテゴリ

| 属性名 | 対応(○/-) | 対象データ |
| ----- | ----- | ----- |
| Google 商品カテゴリ [google_product_category]*2 | ○ | [GMC用]商品カテゴリ Product.gmc_category |
| 商品カテゴリ [product_type] | - | |

*2 Google 商品カテゴリの一覧は[こちらからダウンロード](https://www.google.com/basepages/producttype/taxonomy-with-ids.ja-JP.xls)できます。


### 商品 ID
| 属性名 | 対応(○/-) | 対象データ |
| ----- | ----- | ----- |
| ブランド [brand]* | ○ | [GMC用]商品ブランド Product.gmc_brand |
| GTIN [gtin]* | ○ | [GMC用]GTIN Product.gmc_gtin |
| MPN [mpn]* | ○ | 商品規格ID ProductClass.code<br>※GTINが空白の時のみ |
| ID の有無 [identifier_exists] | - | |

### 詳細な商品説明

| 属性名 | 対応(○/-) | 対象データ |
| ----- | ----- | ----- |
| 状態 [condition]* | ○ | [GMC用]コンディション	 ProductClass.gmc_condition |
| 大人 [adult]*3 | - | |
| マルチパック [multipack]*4 | - | |
| 一括販売商品 [is_bundle]*5 | - | |
| 省エネ性能 [energy_efficiency_class] | - | |
| 最小省エネ性能 [min_energy_efficiency_class] | - | |
| 最大省エネ性能 [max_energy_efficiency_class] | - | |
| 年齢層 [age_group]*6 | - | |
| 色 [color]*6 | ○ | [GMC用]規格種別 ClassName.gmc_class_type |
| 性別 [gender]*6 | - | |
| 素材 [material]*7 | ○ | [GMC用]規格種別 ClassName.gmc_class_type |
| 柄 [pattern]*7 | ○ | [GMC用]規格種別 ClassName.gmc_class_type |
| サイズ [size]*8 | ○ | [GMC用]規格種別 ClassName.gmc_class_type |
| サイズタイプ [size_type] | - | |
| サイズ表記 [size_system] | - | |
| 商品グループ ID [item_group_id] | ○ | 商品ID Product.id |
| 商品の奥行 [product_length] | - | |
| 商品の幅 [product_width] | - | |
| 商品の高さ [product_height] | - | |
| 商品の重量 [product_weight] | - | |
| 商品の詳細 [product_detail] | - | |
| 商品に関する情報 [product_highlight] | - | |

*3 商品にアダルト コンテンツが含まれている場合は必須（Merchant Centerの設定からストア単位で設定可能）
*4 マルチパック(同一商品を複数個まとめて独自にグループ化したもの)をメーカーではなく販売者が作成した場合は必須
*5 1つの商品をメインに商品としてさまざまな商品を独自に組み合わせた一括販売商品の場合は必須
*6 年齢層が指定されているすべての商品, ファッション・アクセサリー（ID 166）で必須
*7 バリエーションに含まれる商品を区別するうえで重要な属性の場合は必須
*8 ファッション・アクセサリーで必須


### ショッピング キャンペーンなどの設定
未対応

### ショッピングモール
未対応

### 掲載先

| 属性名 | 対応(○/-) | 対象データ |
| ----- | ----- | ----- |
| 非掲載先 [excluded_destination] | - |  |
| 掲載先 [included_destination] | - |  |
| ショッピング広告非掲載国 [shopping_ads_excluded_country] | - |  |
| 一時停止 [pause] | ○ | [GMC用]非表示フラグ Product.gmc_hide |


### 送料
未対応

### 税金
未対応

# インストール方法

```
cd app/Plugin;
git clone -b 4.0 https://github.com/cajiya/ec-cube4_gsf.git GmcSimpleFeed42;
cd ../../;
php bin/console eccube:plugin:install --code="GmcSimpleFeed42"
```

