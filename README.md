# Cydia Depiction for PHP
Cydia Packages Diynamic Depiction Page

Cydia用DebパッケージのDepictionを動的に作成するPHP

使用方法
-------------------------------
packagesフォルダ内に対象となるパッケージのフォルダを作成(名称任意)

sampleのinfo.xmlを書き換える
```
<?xml version="1.0" encoding="UTF-8" ?>
<package>
	<id>パッケージ名</id>
	<name>表示名</name>
	<version>バージョン</version>
	<descriptionlist>
		<description>概要</description>
	</descriptionlist>
	<screenshots>
		<screenshot>
			<description>画像の概要</description>
			<image>sample.png</image>
		</screenshot>
	</screenshots>
	<changelogs>
		<change>
			<version>バージョン</version>
			<log>過去ログ</log>
		</change>
		<change>
			<version>バージョン</version>
			<log>過去ログ</log>
		</change>
	</changelogs>
</package>
```
実際にDebパッケージに埋め込む際はcontrolファイルに以下のように記載
```
Depiction: http://XXX.com/Cydia_Depiction_for_PHP/?id=任意のフォルダ名
```
