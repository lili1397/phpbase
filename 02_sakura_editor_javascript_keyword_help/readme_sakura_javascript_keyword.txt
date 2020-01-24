■仕様
・名称 ： サクラエディタ用JavaScriptキーワード MEMORVA版
・作者 ： Y.Oshima http://memorva.jp/
・内容物
	javascript_keyword.kwd ： 強調キーワード用ファイル
	javascript_help.khp    ： ヘルプ表示用ファイル
	readme_sakura_javascript_keyword.txt ： このファイル
・参考資料 ： https://developer.mozilla.org/ja/



■説明
・当ファイルはサクラエディタ用のJavaScript強調キーワード、およびヘルプ表示用のファイルです。
・JavaSciprtのオブジェクト、プロパティ、メソッド等はたくさんありますが、必要そうなものだけ収録しています。
  キーワードだけ用意し、ヘルプが未記入のものもたくさんあります。
  足りないものは今後追加していく予定です。
・当ファイルは他の強調キーワードやヘルプと異なり、上位のオブジェクトがある場合、それを含むものと含まないもの両方を収録しています。
  例えば、Math.log は、Math.log と log の両方を収録しています。
  log だけでなく Math.log も載せることで、Math の入力補完を行うと、Math にどういうプロパティやメソッドがあるか分かります。
  また、log には console.log もあります。
  同名のプロパティやメソッドは1つにまとめ、log のヘルプを見ると Math.log と console.log 両方の説明が表示されるようになっています。
  また、Math.log すべてを範囲選択してヘルプを見ると Math.log だけのヘルプが表示されます。
  良いか悪いか分かりませんが、こういう作りにしてみました。
・当ファイルを使用して使用者にいかなる問題が発生しても当ファイル作者は責任を負いません。



■制作履歴
・2016-11-20
	・Boolean、Event関連追加
	・true、false追加
	・イベントリファレンスのイベント追加

・2016-11-11
	・API関連キーワード追加
		Console
		Window
		Document
		Element
		Screen
		Navigator
		EventTarget
		Storage
		Geolocation
		Coordinates
		NavigatorGeolocation
		Position
	・必要そうなものだけ優先してヘルプ記入

・2016-11-08
	・標準オブジェクト関連追加
		Number、Math、Date、String、RegExp、Array
		ArrayBuffer、JSON

・2016-10-27
	・とりあえず作成開始
	・文と宣言、式と演算子など基本的なものから作成




