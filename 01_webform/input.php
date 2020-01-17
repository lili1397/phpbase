<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>お問い合わせフォーム</title>
<link rel="stylesheet" href="style.css">
<script type="text/javascript" src="contact.js"></script>
</head>
<body>
<div><h1>○○株式会社</h1></div>
<div><h2>お問い合わせ</h2></div>
<div>
	<form action="confirm.php" method="post" name="form" onsubmit="return validate()">
		<h1 class="contact-title">お問い合わせ 内容入力</h1>
		<p>お問い合わせ内容をご入力の上、「確認画面へ」ボタンをクリックしてください。</p>
		<div>
			<div>
				<label>お名前<span>必須</span></label>
				<input type="text" name="name" placeholder="例）山田太郎" value="" maxlength="30">
			</div>
			<div>
				<label>ふりがな<span>必須</span></label>
				<input type="text" name="furigana" placeholder="例）やまだたろう" value="" maxlength="30">
			</div>
			<div>
				<label>メールアドレス<span>必須</span></label>
				<input type="text" name="email" placeholder="例）guest@example.com" value="" maxlength="50">
			</div>
			<div>
				<label>電話番号<span>必須</span></label>
				<input type="text" name="tel" placeholder="例）0000000000" value="" maxlength="20">
			</div>
			<div>
				<label>性別<span>必須</span></label>
				<input type="radio" name="sex" value="男性" checked> 男性
				<input type="radio" name="sex" value="女性"> 女性
			</div>
			<div>
				<label>お問い合わせ項目<span>必須</span></label>
				<select name="item">
					<option value="">お問い合わせ項目を選択してください</option>
					<option value="製品･サービスに関するご質問">製品･サービスに関するご質問</option>
                    <option value="お見積もりのご相談">お見積もりのご相談</option>
                    <option value="資料請求・営業来訪希望等">資料請求・営業来訪希望等</option>
					<option value="ご意見・ご感想">その他ご意見・ご感想</option>
				</select>
			</div>
			<div>
				<label>お問い合わせ内容<span>必須</span></label>
				<textarea name="content" rows="5" placeholder="お問合せ内容を入力" maxlength="500"></textarea>
			</div>
		</div>

        <div>
			<label>個人情報の取り扱いについて</label>
			<span style="font-family: Arial, Verdana;"><span style="font-size: 13.3333px;">下記事項をご確認の上、同意していただける場合は[同意する]にチェックを入れてください。</span></span>
			<div>
			<label><span>必須</span></label>
<textarea name="ta_agreement" rows="7" readonly>
個人情報保護方針（宣言）

当社は、個人情報が重要な財産（法益）であると認識しております。また、これを適切に管理し保護することが、企業としての社会的責任であると考えております。そこで、「安全・安心」をお届けする企業として、お客様、お取引先様、当社役員・従業員等の個人情報の取り扱いにつき基本方針を定めました。当社は、本方針を遵守し、個人情報の保護に努めることを宣言いたします。

1. 個人情報保護に関する法令およびその他の規範の遵守
当社は、個人情報の保護に関係する日本の法令その他の規範、ガイドラインを遵守いたします。 

2. 個人情報の定義
本方針に掲げる「個人情報」とは、生存する個人に関する以下の情報をいいます。
(1)当該情報に含まれる氏名、生年月日、その他の記述等により特定の個人を識別できるもの
(2)他の情報と容易に照合することができ、それにより特定の個人を識別することができることとなるもの

3. 個人情報の管理と継続的実施
当社は、個人情報を適切に保護するために、その保管方法を始めとする管理体制や取り扱い方法を定め、個人情報統括責任者を任命し、当社の役員および従業員（臨時従業員、派遣社員などを含む）、その他関係者に周知徹底させて実行いたします。また、管理方法の見直しを継続的に行ってまいります。 

4. 役員・従業員教育の実施
当社は、役員・従業員に対し個人情報の取り扱いに関する教育を定期的に実施し、個人情報の保護を徹底いたします。 

5. 情報セキュリティの実施
当社は、情報の漏洩や改ざん等の危険を防止するため、情報セキュリティポリシーを策定、運用し、安全対策に努めてまいります。 

6. 個人情報の入手
当社は、個人情報を適法かつ公正な手段により取得いたします。また、入手の際にはあらかじめその目的と利用範囲をお知らせいたします。 

7. 個人情報の利用
当社は、ご提供頂いた個人情報の利用につき、あらかじめお知らせまたは公表した利用目的の範囲を守ります。 

8. 個人情報の提供
(1)当社は、利用目的の範囲内で、個人情報を取り扱う業務を委託することがあります。その際は委託先の管理能力を十分検討し、個人情報に関する取り決めを行い、監督し、個人情報の安全管理を徹底いたします。
(2)また、グループ会社間で共同利用する場合にも、同様に個人情報の安全管理を徹底いたします。
(3)当社は、個人情報をご本人の同意なしに業務委託先以外の第三者に開示・提供することはありません。ただし、法令により、または裁判所、警察等の公的機関から開示を求められた場合には、ご本人の同意なく個人情報を開示・提供することがあります。

9. 個人情報のお問い合せの対応
当社が管理している個人情報に関して、ご本人から開示・訂正・利用停止あるいは消去等のお申し出があったときは、以下の場合を除き、ご本人であることを確認したうえで、必要な対応をいたします。 

(1)ご本人または第三者の生命、身体、財産その他の権利利益を害するおそれがある場合
(2)当社の業務の適正な実施に著しい支障を及ぼすおそれがある場合
(3)他の法令に違反することとなる場合

</textarea>
			</div>
            <div style="text-align: center;">
                <input type="checkbox" name="col_agreement" value="個人情報の取扱いに同意する"><span>&nbsp;&nbsp;個人情報の取扱いに同意する</span>
            </div>
        </div>
	
		<button type="submit">確認画面へ</button>
	</form>
</div>

</body>
</html>