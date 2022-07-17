<?php
require_once(__DIR__ . '/form/config/config.php');
$form = new Monaka\Form();
?>

<!doctype html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="format-detection" content="telephone=no">
  <title>Document</title>

  <meta propety="og:type" content="website">
  <meta propety="og:title" content="">
  <meta propety="og:description" content="website">
  <meta propety="og:site name" content="">
  <meta propety="og:url" content="">
  <meta propety="og:image" content="">
  <meta propety="og:app_id" content="">

  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css">
  <!--住所自動取得-->
  <script type="text/javascript" src="https://ajaxzip3.github.io/ajaxzip3.js"></script>
</head>

<body>

  <main>
    <!--▼ここから-->
    <section class="content-form form_style" id="contact">
      <div>
        <form action="confirmation.php" method="post" enctype="multipart/form-data">
          <dl>
            <dt class="required"><span>事業者名</span></dt>
            <dd>
              <input type="hidden" name="事業者名[params]" value="必須" />
              <input type="text" name="事業者名[value]" placeholder="例：株式会社イープレス" />
            </dd>
            <dt class="required"><span>氏名</span></dt>
            <dd>
              <input type="hidden" name="氏名[params]" value="氏名" />
              <input type="text" name="氏名[value]" placeholder="例：山田太郎" />
            </dd>
            <dt class="required"><span>氏名（フリガナ）</span></dt>
            <dd>
              <input type="hidden" name="氏名（フリガナ）[params]" value="必須" />
              <input type="text" name="氏名（フリガナ）[value]" placeholder="例：ヤマダタロウ" />
            </dd>
            <dt class="required"><span>電話番号</span></dt>
            <dd>
              <input type="hidden" name="電話番号[params]" value="必須" />
              <input type="text" name="電話番号[value]" placeholder="例：09027808872" />
            </dd>
            <dt class="required"><span>郵便番号 ※半角</span></dt>
            <dd>
              <input type="hidden" name="郵便番号[params]" value="必須">
              <input type="text" name="郵便番号[value]" placeholder="例：7918006" onKeyUp="AjaxZip3.zip2addr(this,'','住所[value]','住所[value]');">
            </dd>
            <dt class="required"><span>住所</span></dt>
            <dd>
              <input type="hidden" name="住所[params]" value="必須">
              <input type="text" name="住所[value]" placeholder="例：愛媛県松山市安城寺町186番地1">
            </dd>
            <dt class="required"><span>メールアドレス</span></dt>
            <dd>
              <input type="hidden" name="メールアドレス[params]" value="メール" />
              <input type="email" name="メールアドレス[value]" placeholder="例：sample@sample.co.jp">
            </dd>
            <dt class="required"><span>メールアドレス（確認）</span></dt>
            <dd>
              <input type="hidden" name="メールアドレス確認[params]" value="再入力" />
              <input type="email" name="メールアドレス確認[value]" placeholder="例：sample@sample.co.jp">
            </dd>
            <dt class="required"><span>ラジオボタン</span></dt>
            <dd>
              <input type="hidden" name="ラジオボタン[params]" value="必須" />
              <label>
                <input type="radio" name="ラジオボタン[value]" value="ラジオボタン1" class="chk_input" />
                <span class="chk_style">ラジオボタン1</span>
              </label>
              <label>
                <input type="radio" name="ラジオボタン[value]" value="ラジオボタン2" class="chk_input" />
                <span class="chk_style">ラジオボタン2</span>
              </label>
              <label>
                <input type="radio" name="ラジオボタン[value]" value="ラジオボタン3" class="chk_input" />
                <span class="chk_style">ラジオボタン3</span>
              </label>
            </dd>
            <dt class="required"><span>チェックボックス</span></dt>
            <dd>
              <input type="hidden" name="チェックボックス[params]">
              <label>
                <input type="checkbox" name="チェックボックス[value][]" value="チェックボックス1" class="chk_input" />
                <span class="chk_style">チェックボックス1</span>
              </label>
              <label>
                <input type="checkbox" name="チェックボックス[value][]" value="チェックボックス2" class="chk_input" />
                <span class="chk_style">チェックボックス2</span>
              </label>
              <label>
                <input type="checkbox" name="チェックボックス[value][]" value="チェックボックス3" class="chk_input" />
                <span class="chk_style">チェックボックス3</span>
              </label>
              <label>
                <input type="checkbox" name="チェックボックス[value][]" value="チェックボックス4" class="chk_input" />
                <span class="chk_style">チェックボックス4</span>
              </label>
            </dd>
            <dt class="required"><span>セレクトボックス</span></dt>
            <dd class="sel_box">
              <input type="hidden" name="セレクトボックス[params]" />
              <div>
                <select name="セレクトボックス[value]">
                  <option value="">選択してください</option>
                  <option value="項目1">項目1</option>
                  <option value="項目2">項目2</option>
                  <option value="項目3">項目3</option>
                </select>
              </div>
            </dd>
            <dt><span>お問い合わせ内容</span></dt>
            <dd>
              <input type="hidden" name="お問い合わせ内容[params]">
              <textarea name="お問い合わせ内容[value]" placeholder="お問い合わせ内容を入力してください"></textarea>
            </dd>
          </dl>

          <div id="privacy">
            <strong>個人情報保護方針に基づく表記</strong>
            <div>
              <p>テキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
              <h3>見出し</h3>
              <p>テキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
              <h3>見出し</h3>
              <p>テキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
              <h3>見出し</h3>
              <p>テキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
              <h3>見出し</h3>
              <p>テキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
              <h3>見出し</h3>
              <p>テキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
              <h3>見出し</h3>
              <p>テキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
              <h3>見出し</h3>
              <p>テキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
              <h3>見出し</h3>
              <p>テキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
              <h3>見出し</h3>
              <p>テキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
              <h3>見出し</h3>
              <p>テキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
              <h3>見出し</h3>
              <p>テキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
              <h3>見出し</h3>
              <p>テキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>

            </div>
          </div>

          <label id="agree">
            <input type="hidden" name="個人情報保護方針への同意[params]" value="必須" />
            <input type="checkbox" name="個人情報保護方針への同意[value]" value="同意する" />
            個人情報保護方針に同意する。
          </label>

          <p id="form_btn"><input type="submit" value="確認画面へ" class="btn"></p>

        </form>
      </div>
    </section>
    <!--▲ここまで-->
  </main>

</body>

</html>