# EC-CUBE4.2用 Google Merchant Center用 RSS作成プラグイン

Google Merchant Centerに商品を登録するためのRSSフィードを作成するプラグイン

# インストール方法

```
cd app/Plugin;
git clone -b 4.2 https://github.com/cajiya/ec-cube4_gsf.git;
mv ec-cube4_awe AttachWysiwygEditor42;
cd ../../;
php bin/console eccube:plugin:install --code="GmcSimpleFeed"
```

