<?php
$page_title = 'AIでコーディング支援 - AI×ホームページ制作 | AI Tech Stack';
$current_page = 'tools';
$section_name = '第2部：AIツールの活用';
$step_number = 6;
$total_steps = 14;

include 'includes/header.php';
include 'includes/progress.php';
?>

    <!-- メインコンテンツ -->
    <main class="container mx-auto px-6 py-12 max-w-4xl">
        <h1 class="text-4xl font-bold mb-8">AIでコーディング支援</h1>

        <!-- イントロ -->
        <div class="bg-orange-50 border-l-4 border-orange-500 p-6 mb-8">
            <p class="text-lg">AIを使えば、HTML/CSSのコーディングを大幅にスピードアップ。デザインを伝えるだけで、コードを自動生成してくれます。このページでは、実際にファイルを作成してブラウザで確認するところまで体験します。</p>
        </div>

        <!-- セクション1：AIコーディングの流れ -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-orange-200">AIコーディングの流れ</h2>

            <div class="bg-white p-6 rounded-lg shadow">
                <div class="space-y-6">
                    <div class="flex items-start">
                        <div class="bg-orange-500 text-white px-3 py-1 rounded font-bold mr-4">1</div>
                        <div>
                            <h4 class="font-bold">デザインを言葉で説明</h4>
                            <p class="text-sm text-gray-600">作りたいUIの特徴を具体的に伝える</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <div class="bg-orange-500 text-white px-3 py-1 rounded font-bold mr-4">2</div>
                        <div>
                            <h4 class="font-bold">AIがコードを生成</h4>
                            <p class="text-sm text-gray-600">HTML/CSS（Tailwind）のコードを出力</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <div class="bg-orange-500 text-white px-3 py-1 rounded font-bold mr-4">3</div>
                        <div>
                            <h4 class="font-bold">ファイルに保存</h4>
                            <p class="text-sm text-gray-600">生成されたコードを .html ファイルとして保存する</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <div class="bg-orange-500 text-white px-3 py-1 rounded font-bold mr-4">4</div>
                        <div>
                            <h4 class="font-bold">ブラウザで確認・調整</h4>
                            <p class="text-sm text-gray-600">ファイルをブラウザで開いてプレビューし、必要に応じて修正を依頼</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- セクション2：事前準備 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-orange-200">事前準備：コードを書く環境</h2>

            <div class="bg-white p-6 rounded-lg shadow mb-6">
                <h3 class="font-bold text-lg mb-4 text-orange-600">必要なもの</h3>
                <div class="space-y-4">
                    <div class="flex items-start">
                        <span class="text-orange-500 font-bold mr-3">1.</span>
                        <div>
                            <h4 class="font-bold">テキストエディタ</h4>
                            <p class="text-sm text-gray-600 mb-2"><strong>Visual Studio Code（VS Code）</strong>がおすすめです。無料でダウンロードできます。</p>
                            <p class="text-xs text-gray-500">メモ帳でも可能ですが、VS Codeはコードの色分け表示やエラー検出ができるため効率的です。</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <span class="text-orange-500 font-bold mr-3">2.</span>
                        <div>
                            <h4 class="font-bold">Webブラウザ</h4>
                            <p class="text-sm text-gray-600">Google Chrome、Microsoft Edge、Safariなど。HTMLファイルをダブルクリックするだけで表示できます。</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <span class="text-orange-500 font-bold mr-3">3.</span>
                        <div>
                            <h4 class="font-bold">Claude Code（ターミナルで使うAI）</h4>
                            <p class="text-sm text-gray-600">ターミナル（コマンドプロンプト）で <code class="bg-gray-100 px-2 py-0.5 rounded text-orange-600">claude</code> と入力するだけでAIとの対話が始まります。</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="font-bold text-lg mb-4 text-orange-600">作業フォルダの作成</h3>
                <p class="text-sm text-gray-600 mb-4">まず、コードを保存するフォルダを作りましょう。ターミナルで以下を実行します。</p>
                <div class="bg-gray-800 text-gray-100 p-4 rounded text-sm mb-4">
                    <pre class="whitespace-pre-wrap">mkdir my-website
cd my-website</pre>
                </div>
                <p class="text-sm text-gray-600 mb-4">次に、Claude Codeを起動します。</p>
                <div class="bg-gray-800 text-gray-100 p-4 rounded text-sm mb-4">
                    <pre class="whitespace-pre-wrap">claude</pre>
                </div>
                <div class="bg-blue-50 border-l-4 border-blue-400 p-4">
                    <p class="text-sm text-blue-800"><strong>ポイント：</strong>HTMLファイルはサーバー不要で、ブラウザで直接開くだけで表示できます。特別なソフトのインストールは不要です。</p>
                </div>
            </div>
        </section>

        <!-- セクション3：実践コンポーネント作成 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-orange-200">実践：コンポーネントを作成</h2>

            <div class="space-y-8">

                <!-- ヘッダー作成 -->
                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold text-lg mb-4 text-orange-600">実践1：ヘッダーを作成</h3>

                    <div class="bg-orange-50 border-l-4 border-orange-500 p-4 mb-4">
                        <p class="text-sm font-bold text-orange-800 mb-2">Claude Codeへの指示：</p>
                        <p class="text-sm text-orange-700">以下をClaude Codeにそのまま入力してください。ファイル名を指定しているので、AIが自動的にファイルを作成・保存してくれます。</p>
                    </div>

                    <div class="bg-gray-800 text-gray-100 p-4 rounded text-sm mb-4">
                        <pre class="whitespace-pre-wrap">以下の仕様でヘッダーコンポーネントを作成して、header-sample.htmlとして保存してください。
完全なHTMLファイル（DOCTYPE宣言、head、body含む）で作成し、Tailwind CSSはCDN経由で読み込んでください。

【仕様】
・固定ヘッダー（スクロールで追従）
・左にロゴ（テキストで「MyPortfolio」）
・右にナビゲーション（ホーム、実績、スキル、お問い合わせ）
・背景：白、影付き
・スマホ時はハンバーガーメニュー（JavaScriptで開閉）

レスポンシブ対応でお願いします。</pre>
                    </div>

                    <p class="text-sm text-gray-600 mb-4">Claude Codeが生成するコードは、以下のような完全なHTMLファイルになります。</p>

                    <details class="mb-4">
                        <summary class="cursor-pointer text-orange-600 font-bold text-sm hover:text-orange-800">生成されるコードの例を見る（クリックで展開）</summary>
                        <div class="bg-gray-800 text-gray-100 p-4 rounded text-sm mt-2">
                            <pre class="whitespace-pre-wrap">&lt;!DOCTYPE html&gt;
&lt;html lang="ja"&gt;
&lt;head&gt;
    &lt;meta charset="UTF-8"&gt;
    &lt;meta name="viewport" content="width=device-width, initial-scale=1.0"&gt;
    &lt;title&gt;MyPortfolio&lt;/title&gt;
    &lt;script src="https://cdn.tailwindcss.com"&gt;&lt;/script&gt;
&lt;/head&gt;
&lt;body class="bg-gray-50"&gt;

    &lt;!-- 固定ヘッダー --&gt;
    &lt;header class="fixed top-0 left-0 w-full bg-white shadow-md z-50"&gt;
        &lt;div class="container mx-auto px-6 py-4 flex items-center justify-between"&gt;
            &lt;!-- ロゴ --&gt;
            &lt;a href="#" class="text-2xl font-bold text-gray-800"&gt;MyPortfolio&lt;/a&gt;

            &lt;!-- PC用ナビゲーション --&gt;
            &lt;nav class="hidden md:flex space-x-8"&gt;
                &lt;a href="#" class="text-gray-600 hover:text-blue-600 transition"&gt;ホーム&lt;/a&gt;
                &lt;a href="#" class="text-gray-600 hover:text-blue-600 transition"&gt;実績&lt;/a&gt;
                &lt;a href="#" class="text-gray-600 hover:text-blue-600 transition"&gt;スキル&lt;/a&gt;
                &lt;a href="#" class="text-gray-600 hover:text-blue-600 transition"&gt;お問い合わせ&lt;/a&gt;
            &lt;/nav&gt;

            &lt;!-- ハンバーガーメニューボタン --&gt;
            &lt;button id="menuBtn" class="md:hidden text-gray-600 focus:outline-none"&gt;
                &lt;svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"&gt;
                    &lt;path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"&gt;&lt;/path&gt;
                &lt;/svg&gt;
            &lt;/button&gt;
        &lt;/div&gt;

        &lt;!-- モバイルメニュー --&gt;
        &lt;div id="mobileMenu" class="hidden md:hidden bg-white border-t"&gt;
            &lt;nav class="container mx-auto px-6 py-4 space-y-3"&gt;
                &lt;a href="#" class="block text-gray-600 hover:text-blue-600"&gt;ホーム&lt;/a&gt;
                &lt;a href="#" class="block text-gray-600 hover:text-blue-600"&gt;実績&lt;/a&gt;
                &lt;a href="#" class="block text-gray-600 hover:text-blue-600"&gt;スキル&lt;/a&gt;
                &lt;a href="#" class="block text-gray-600 hover:text-blue-600"&gt;お問い合わせ&lt;/a&gt;
            &lt;/nav&gt;
        &lt;/div&gt;
    &lt;/header&gt;

    &lt;!-- ヘッダーの高さ分の余白 --&gt;
    &lt;div class="pt-20"&gt;
        &lt;div class="container mx-auto px-6 py-12"&gt;
            &lt;h1 class="text-3xl font-bold text-gray-800"&gt;ようこそ、MyPortfolioへ&lt;/h1&gt;
            &lt;p class="mt-4 text-gray-600"&gt;スクロールしてヘッダーが固定されることを確認してみましょう。&lt;/p&gt;
            &lt;div class="mt-8 space-y-8"&gt;
                &lt;div class="h-64 bg-gray-200 rounded-lg flex items-center justify-center text-gray-400"&gt;コンテンツエリア&lt;/div&gt;
                &lt;div class="h-64 bg-gray-200 rounded-lg flex items-center justify-center text-gray-400"&gt;コンテンツエリア&lt;/div&gt;
                &lt;div class="h-64 bg-gray-200 rounded-lg flex items-center justify-center text-gray-400"&gt;コンテンツエリア&lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;

    &lt;script&gt;
        document.getElementById('menuBtn').addEventListener('click', function() {
            document.getElementById('mobileMenu').classList.toggle('hidden');
        });
    &lt;/script&gt;

&lt;/body&gt;
&lt;/html&gt;</pre>
                        </div>
                    </details>

                    <div class="bg-green-50 border-l-4 border-green-500 p-4">
                        <p class="text-sm font-bold text-green-800 mb-2">動作確認：</p>
                        <ul class="text-sm text-green-700 space-y-1">
                            <li>1. <code class="bg-green-100 px-1 rounded">header-sample.html</code> をブラウザで開く（ファイルをダブルクリック）</li>
                            <li>2. ヘッダーが画面上部に固定されていることを確認</li>
                            <li>3. 画面幅を狭くして（またはスマホ表示で）ハンバーガーメニューが表示されることを確認</li>
                            <li>4. ハンバーガーメニューをクリックしてメニューが開閉することを確認</li>
                        </ul>
                    </div>
                </div>

                <!-- カードコンポーネント -->
                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold text-lg mb-4 text-orange-600">実践2：カードコンポーネントを作成</h3>

                    <div class="bg-orange-50 border-l-4 border-orange-500 p-4 mb-4">
                        <p class="text-sm font-bold text-orange-800 mb-2">Claude Codeへの指示：</p>
                        <p class="text-sm text-orange-700">以下をClaude Codeに入力してください。</p>
                    </div>

                    <div class="bg-gray-800 text-gray-100 p-4 rounded text-sm mb-4">
                        <pre class="whitespace-pre-wrap">実績紹介用のカードコンポーネントを作成して、card-sample.htmlとして保存してください。
完全なHTMLファイルで作成し、Tailwind CSSはCDN経由で読み込んでください。
カードは3枚横並びで表示してください。

【仕様】
・画像エリア（16:9比率、ダミーの背景色でOK）
・タイトル（太字、大きめ）
・説明文（2行まで、超過は...で省略）
・タグ（複数表示、青色のバッジ）
・ホバー時に少し浮き上がるアニメーション
・角丸、影付き

Tailwind CSSで実装してください。</pre>
                    </div>

                    <details class="mb-4">
                        <summary class="cursor-pointer text-orange-600 font-bold text-sm hover:text-orange-800">生成されるコードの例を見る（クリックで展開）</summary>
                        <div class="bg-gray-800 text-gray-100 p-4 rounded text-sm mt-2">
                            <pre class="whitespace-pre-wrap">&lt;!DOCTYPE html&gt;
&lt;html lang="ja"&gt;
&lt;head&gt;
    &lt;meta charset="UTF-8"&gt;
    &lt;meta name="viewport" content="width=device-width, initial-scale=1.0"&gt;
    &lt;title&gt;実績カード&lt;/title&gt;
    &lt;script src="https://cdn.tailwindcss.com"&gt;&lt;/script&gt;
&lt;/head&gt;
&lt;body class="bg-gray-100 min-h-screen"&gt;

    &lt;div class="container mx-auto px-6 py-12"&gt;
        &lt;h1 class="text-3xl font-bold text-gray-800 mb-8"&gt;実績紹介&lt;/h1&gt;

        &lt;div class="grid md:grid-cols-3 gap-6"&gt;

            &lt;!-- カード1 --&gt;
            &lt;div class="bg-white rounded-xl shadow-md overflow-hidden hover:-translate-y-2 hover:shadow-xl transition-all duration-300 cursor-pointer"&gt;
                &lt;div class="aspect-video bg-gradient-to-br from-blue-400 to-blue-600 flex items-center justify-center text-white text-lg font-bold"&gt;
                    Project 1
                &lt;/div&gt;
                &lt;div class="p-5"&gt;
                    &lt;h3 class="text-lg font-bold text-gray-800 mb-2"&gt;企業コーポレートサイト&lt;/h3&gt;
                    &lt;p class="text-sm text-gray-600 line-clamp-2 mb-3"&gt;中小企業向けのコーポレートサイトをデザインから実装まで担当しました。モダンで信頼感のあるデザインを実現。&lt;/p&gt;
                    &lt;div class="flex flex-wrap gap-2"&gt;
                        &lt;span class="px-2 py-1 bg-blue-100 text-blue-700 text-xs rounded-full"&gt;HTML/CSS&lt;/span&gt;
                        &lt;span class="px-2 py-1 bg-blue-100 text-blue-700 text-xs rounded-full"&gt;レスポンシブ&lt;/span&gt;
                        &lt;span class="px-2 py-1 bg-blue-100 text-blue-700 text-xs rounded-full"&gt;WordPress&lt;/span&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
            &lt;/div&gt;

            &lt;!-- カード2 --&gt;
            &lt;div class="bg-white rounded-xl shadow-md overflow-hidden hover:-translate-y-2 hover:shadow-xl transition-all duration-300 cursor-pointer"&gt;
                &lt;div class="aspect-video bg-gradient-to-br from-green-400 to-green-600 flex items-center justify-center text-white text-lg font-bold"&gt;
                    Project 2
                &lt;/div&gt;
                &lt;div class="p-5"&gt;
                    &lt;h3 class="text-lg font-bold text-gray-800 mb-2"&gt;ECサイトリニューアル&lt;/h3&gt;
                    &lt;p class="text-sm text-gray-600 line-clamp-2 mb-3"&gt;既存のECサイトをモダンなデザインにリニューアル。ユーザビリティを向上させ、コンバージョン率が20%改善しました。&lt;/p&gt;
                    &lt;div class="flex flex-wrap gap-2"&gt;
                        &lt;span class="px-2 py-1 bg-blue-100 text-blue-700 text-xs rounded-full"&gt;UI/UX&lt;/span&gt;
                        &lt;span class="px-2 py-1 bg-blue-100 text-blue-700 text-xs rounded-full"&gt;EC&lt;/span&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
            &lt;/div&gt;

            &lt;!-- カード3 --&gt;
            &lt;div class="bg-white rounded-xl shadow-md overflow-hidden hover:-translate-y-2 hover:shadow-xl transition-all duration-300 cursor-pointer"&gt;
                &lt;div class="aspect-video bg-gradient-to-br from-purple-400 to-purple-600 flex items-center justify-center text-white text-lg font-bold"&gt;
                    Project 3
                &lt;/div&gt;
                &lt;div class="p-5"&gt;
                    &lt;h3 class="text-lg font-bold text-gray-800 mb-2"&gt;ランディングページ制作&lt;/h3&gt;
                    &lt;p class="text-sm text-gray-600 line-clamp-2 mb-3"&gt;新商品のプロモーション用ランディングページ。アニメーションを活用した訴求力の高いデザインで集客に貢献しました。&lt;/p&gt;
                    &lt;div class="flex flex-wrap gap-2"&gt;
                        &lt;span class="px-2 py-1 bg-blue-100 text-blue-700 text-xs rounded-full"&gt;LP制作&lt;/span&gt;
                        &lt;span class="px-2 py-1 bg-blue-100 text-blue-700 text-xs rounded-full"&gt;アニメーション&lt;/span&gt;
                        &lt;span class="px-2 py-1 bg-blue-100 text-blue-700 text-xs rounded-full"&gt;マーケティング&lt;/span&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
            &lt;/div&gt;

        &lt;/div&gt;
    &lt;/div&gt;

&lt;/body&gt;
&lt;/html&gt;</pre>
                        </div>
                    </details>

                    <div class="bg-green-50 border-l-4 border-green-500 p-4">
                        <p class="text-sm font-bold text-green-800 mb-2">動作確認：</p>
                        <ul class="text-sm text-green-700 space-y-1">
                            <li>1. <code class="bg-green-100 px-1 rounded">card-sample.html</code> をブラウザで開く</li>
                            <li>2. 3枚のカードが横並びで表示されることを確認</li>
                            <li>3. カードにマウスを乗せて、浮き上がるアニメーションを確認</li>
                            <li>4. 画面幅を狭くして、カードが縦並びになることを確認</li>
                        </ul>
                    </div>
                </div>

                <!-- お問い合わせフォーム -->
                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold text-lg mb-4 text-orange-600">実践3：お問い合わせフォームを作成</h3>

                    <div class="bg-orange-50 border-l-4 border-orange-500 p-4 mb-4">
                        <p class="text-sm font-bold text-orange-800 mb-2">Claude Codeへの指示：</p>
                        <p class="text-sm text-orange-700">以下をClaude Codeに入力してください。</p>
                    </div>

                    <div class="bg-gray-800 text-gray-100 p-4 rounded text-sm mb-4">
                        <pre class="whitespace-pre-wrap">お問い合わせフォームを作成して、contact-sample.htmlとして保存してください。
完全なHTMLファイルで作成し、Tailwind CSSはCDN経由で読み込んでください。

【項目】
・お名前（必須）
・メールアドレス（必須）
・会社名（任意）
・お問い合わせ種別（ドロップダウン：相談、見積もり依頼、その他）
・メッセージ（テキストエリア、必須）
・送信ボタン

【デザイン】
・シンプルでモダン
・必須項目には*マーク
・フォーカス時に枠線が青に変化
・送信ボタンは目立つ色</pre>
                    </div>

                    <details class="mb-4">
                        <summary class="cursor-pointer text-orange-600 font-bold text-sm hover:text-orange-800">生成されるコードの例を見る（クリックで展開）</summary>
                        <div class="bg-gray-800 text-gray-100 p-4 rounded text-sm mt-2">
                            <pre class="whitespace-pre-wrap">&lt;!DOCTYPE html&gt;
&lt;html lang="ja"&gt;
&lt;head&gt;
    &lt;meta charset="UTF-8"&gt;
    &lt;meta name="viewport" content="width=device-width, initial-scale=1.0"&gt;
    &lt;title&gt;お問い合わせ&lt;/title&gt;
    &lt;script src="https://cdn.tailwindcss.com"&gt;&lt;/script&gt;
&lt;/head&gt;
&lt;body class="bg-gray-50 min-h-screen"&gt;

    &lt;div class="container mx-auto px-6 py-12 max-w-2xl"&gt;
        &lt;h1 class="text-3xl font-bold text-gray-800 mb-2"&gt;お問い合わせ&lt;/h1&gt;
        &lt;p class="text-gray-600 mb-8"&gt;以下のフォームにご記入ください。&lt;span class="text-red-500"&gt;*&lt;/span&gt; は必須項目です。&lt;/p&gt;

        &lt;form class="bg-white p-8 rounded-xl shadow-md space-y-6"&gt;
            &lt;!-- お名前 --&gt;
            &lt;div&gt;
                &lt;label class="block text-sm font-bold text-gray-700 mb-2"&gt;
                    お名前 &lt;span class="text-red-500"&gt;*&lt;/span&gt;
                &lt;/label&gt;
                &lt;input type="text" required placeholder="山田 太郎"
                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition"&gt;
            &lt;/div&gt;

            &lt;!-- メールアドレス --&gt;
            &lt;div&gt;
                &lt;label class="block text-sm font-bold text-gray-700 mb-2"&gt;
                    メールアドレス &lt;span class="text-red-500"&gt;*&lt;/span&gt;
                &lt;/label&gt;
                &lt;input type="email" required placeholder="example@email.com"
                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition"&gt;
            &lt;/div&gt;

            &lt;!-- 会社名 --&gt;
            &lt;div&gt;
                &lt;label class="block text-sm font-bold text-gray-700 mb-2"&gt;会社名&lt;/label&gt;
                &lt;input type="text" placeholder="株式会社サンプル"
                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition"&gt;
            &lt;/div&gt;

            &lt;!-- お問い合わせ種別 --&gt;
            &lt;div&gt;
                &lt;label class="block text-sm font-bold text-gray-700 mb-2"&gt;お問い合わせ種別&lt;/label&gt;
                &lt;select class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition"&gt;
                    &lt;option value=""&gt;選択してください&lt;/option&gt;
                    &lt;option value="consultation"&gt;相談&lt;/option&gt;
                    &lt;option value="quote"&gt;見積もり依頼&lt;/option&gt;
                    &lt;option value="other"&gt;その他&lt;/option&gt;
                &lt;/select&gt;
            &lt;/div&gt;

            &lt;!-- メッセージ --&gt;
            &lt;div&gt;
                &lt;label class="block text-sm font-bold text-gray-700 mb-2"&gt;
                    メッセージ &lt;span class="text-red-500"&gt;*&lt;/span&gt;
                &lt;/label&gt;
                &lt;textarea required rows="5" placeholder="お問い合わせ内容をご記入ください"
                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition resize-vertical"&gt;&lt;/textarea&gt;
            &lt;/div&gt;

            &lt;!-- 送信ボタン --&gt;
            &lt;button type="submit"
                class="w-full bg-blue-600 text-white py-3 px-6 rounded-lg font-bold hover:bg-blue-700 transition-colors duration-200"&gt;
                送信する
            &lt;/button&gt;
        &lt;/form&gt;
    &lt;/div&gt;

&lt;/body&gt;
&lt;/html&gt;</pre>
                        </div>
                    </details>

                    <div class="bg-green-50 border-l-4 border-green-500 p-4">
                        <p class="text-sm font-bold text-green-800 mb-2">動作確認：</p>
                        <ul class="text-sm text-green-700 space-y-1">
                            <li>1. <code class="bg-green-100 px-1 rounded">contact-sample.html</code> をブラウザで開く</li>
                            <li>2. 各入力欄をクリックして、枠線が青に変わることを確認</li>
                            <li>3. 何も入力せず「送信する」を押して、必須項目のエラー表示を確認</li>
                        </ul>
                    </div>
                </div>

            </div>
        </section>

        <!-- セクション4：ファイルの保存と確認方法 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-orange-200">ファイルの保存と確認方法</h2>

            <div class="bg-white p-6 rounded-lg shadow mb-6">
                <h3 class="font-bold text-lg mb-4 text-orange-600">ファイルの保存</h3>
                <div class="space-y-4">
                    <div class="flex items-start">
                        <span class="text-orange-500 font-bold mr-3">1.</span>
                        <div>
                            <h4 class="font-bold">拡張子は必ず <code class="bg-gray-100 px-2 py-0.5 rounded">.html</code></h4>
                            <p class="text-sm text-gray-600">ファイル名は半角英数字で、拡張子を <code class="bg-gray-100 px-1 rounded">.html</code> にします。例：<code class="bg-gray-100 px-1 rounded">index.html</code>、<code class="bg-gray-100 px-1 rounded">contact.html</code></p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <span class="text-orange-500 font-bold mr-3">2.</span>
                        <div>
                            <h4 class="font-bold">Claude Codeなら自動保存</h4>
                            <p class="text-sm text-gray-600">Claude Codeに「〇〇.htmlとして保存して」と指示すれば、ファイルの作成・保存を自動で行ってくれます。手動でコピー＆ペーストする必要はありません。</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <span class="text-orange-500 font-bold mr-3">3.</span>
                        <div>
                            <h4 class="font-bold">手動で保存する場合</h4>
                            <p class="text-sm text-gray-600">VS Codeでファイルを新規作成し、コードを貼り付けて保存（Ctrl+S / Cmd+S）します。保存時に拡張子が <code class="bg-gray-100 px-1 rounded">.html</code> になっていることを確認してください。</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-white p-6 rounded-lg shadow mb-6">
                <h3 class="font-bold text-lg mb-4 text-orange-600">ブラウザでの確認方法</h3>
                <div class="space-y-4">
                    <div class="flex items-start">
                        <span class="text-orange-500 font-bold mr-3">1.</span>
                        <div>
                            <h4 class="font-bold">ダブルクリックで開く</h4>
                            <p class="text-sm text-gray-600">保存した <code class="bg-gray-100 px-1 rounded">.html</code> ファイルをダブルクリックすると、既定のブラウザで自動的に開きます。</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <span class="text-orange-500 font-bold mr-3">2.</span>
                        <div>
                            <h4 class="font-bold">変更を反映するにはリロード</h4>
                            <p class="text-sm text-gray-600">コードを修正したら、ブラウザで <strong>Ctrl+R</strong>（Macは <strong>Cmd+R</strong>）を押すと最新の状態に更新されます。</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <span class="text-orange-500 font-bold mr-3">3.</span>
                        <div>
                            <h4 class="font-bold">スマホ表示の確認</h4>
                            <p class="text-sm text-gray-600">ブラウザの開発者ツール（F12キー）を開き、スマホアイコンをクリックするとモバイル表示を確認できます。</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="font-bold text-lg mb-4 text-orange-600">シンプルなサイトのファイル構成</h3>
                <p class="text-sm text-gray-600 mb-4">ポートフォリオサイトなら、以下のようなファイル構成が一般的です。</p>
                <div class="bg-gray-800 text-gray-100 p-4 rounded text-sm">
                    <pre class="whitespace-pre-wrap">my-website/
  ├── index.html          ← トップページ
  ├── about.html           ← 自己紹介ページ
  ├── works.html           ← 実績ページ
  ├── contact.html         ← お問い合わせページ
  └── images/              ← 画像フォルダ
       ├── profile.jpg
       └── work1.png</pre>
                </div>
            </div>
        </section>

        <!-- セクション5：よくあるエラーと対処法 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-orange-200">よくあるエラーと対処法</h2>

            <div class="space-y-4">
                <div class="bg-red-50 border-l-4 border-red-400 p-5">
                    <h4 class="font-bold text-red-800 mb-2">コードを貼り付けたが何も表示されない</h4>
                    <p class="text-sm text-red-700 mb-2"><strong>原因：</strong>ファイルが <code class="bg-red-100 px-1 rounded">.txt</code> で保存されている可能性があります。</p>
                    <p class="text-sm text-red-700"><strong>対処法：</strong>ファイルの拡張子を <code class="bg-red-100 px-1 rounded">.html</code> に変更してください。Windowsの場合、エクスプローラーの「表示」メニューで「ファイル名拡張子」にチェックを入れると確認できます。</p>
                </div>

                <div class="bg-red-50 border-l-4 border-red-400 p-5">
                    <h4 class="font-bold text-red-800 mb-2">Tailwind CSSが効かない（デザインが崩れる）</h4>
                    <p class="text-sm text-red-700 mb-2"><strong>原因：</strong>Tailwind CSSのCDNリンクが正しく読み込まれていません。</p>
                    <p class="text-sm text-red-700 mb-2"><strong>対処法：</strong><code class="bg-red-100 px-1 rounded">&lt;head&gt;</code> タグ内に以下の1行があることを確認してください。</p>
                    <div class="bg-gray-800 text-gray-100 p-3 rounded text-sm mt-2">
                        <pre class="whitespace-pre-wrap">&lt;script src="https://cdn.tailwindcss.com"&gt;&lt;/script&gt;</pre>
                    </div>
                    <p class="text-sm text-red-700 mt-2">また、インターネットに接続されていることも確認してください（CDNはオンラインでのみ動作します）。</p>
                </div>

                <div class="bg-red-50 border-l-4 border-red-400 p-5">
                    <h4 class="font-bold text-red-800 mb-2">ハンバーガーメニューが動かない</h4>
                    <p class="text-sm text-red-700 mb-2"><strong>原因：</strong>JavaScriptの <code class="bg-red-100 px-1 rounded">&lt;script&gt;</code> タグの位置が正しくない可能性があります。</p>
                    <p class="text-sm text-red-700"><strong>対処法：</strong><code class="bg-red-100 px-1 rounded">&lt;script&gt;</code> タグが <code class="bg-red-100 px-1 rounded">&lt;/body&gt;</code> の直前に配置されていることを確認してください。HTMLの要素がすべて読み込まれた後にJavaScriptが実行される必要があります。</p>
                </div>

                <div class="bg-red-50 border-l-4 border-red-400 p-5">
                    <h4 class="font-bold text-red-800 mb-2">日本語が文字化けする</h4>
                    <p class="text-sm text-red-700 mb-2"><strong>原因：</strong>文字コードの指定がありません。</p>
                    <p class="text-sm text-red-700"><strong>対処法：</strong><code class="bg-red-100 px-1 rounded">&lt;head&gt;</code> タグ内に以下の行があることを確認してください。</p>
                    <div class="bg-gray-800 text-gray-100 p-3 rounded text-sm mt-2">
                        <pre class="whitespace-pre-wrap">&lt;meta charset="UTF-8"&gt;</pre>
                    </div>
                </div>
            </div>
        </section>

        <!-- セクション6：コード修正のコツ -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-orange-200">コード修正のコツ</h2>

            <div class="grid md:grid-cols-2 gap-4">
                <div class="bg-white p-4 rounded-lg shadow">
                    <h4 class="font-bold text-orange-600 mb-2">具体的に指示する</h4>
                    <p class="text-sm text-gray-600">「もっと大きく」→「font-sizeを24pxに」</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h4 class="font-bold text-orange-600 mb-2">参考画像を使う</h4>
                    <p class="text-sm text-gray-600">スクリーンショットをアップロードして「これに近づけて」</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h4 class="font-bold text-orange-600 mb-2">段階的に修正</h4>
                    <p class="text-sm text-gray-600">一度に多くの修正を頼まない</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h4 class="font-bold text-orange-600 mb-2">良い例を見せる</h4>
                    <p class="text-sm text-gray-600">「このサイトのようなデザインで」とURL共有</p>
                </div>
            </div>
        </section>

        <!-- まとめ -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-orange-200">まとめ</h2>
            <div class="bg-orange-50 p-6 rounded-lg">
                <ul class="space-y-3">
                    <li class="flex items-start">
                        <span class="text-orange-600 mr-2">&#10003;</span>
                        <span>デザインを言葉で説明してコードを生成</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-orange-600 mr-2">&#10003;</span>
                        <span>具体的な仕様を伝えるほど精度が上がる</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-orange-600 mr-2">&#10003;</span>
                        <span>ファイル名を指定すればClaude Codeが自動保存してくれる</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-orange-600 mr-2">&#10003;</span>
                        <span>.htmlファイルはダブルクリックでブラウザ確認できる</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-orange-600 mr-2">&#10003;</span>
                        <span>修正は段階的に、具体的に依頼</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-orange-600 mr-2">&#10003;</span>
                        <span>参考画像やURLがあると精度アップ</span>
                    </li>
                </ul>
            </div>
        </section>

        <!-- ナビゲーション -->
        <div class="flex justify-between items-center pt-8 border-t">
            <a href="ai-design.php" class="flex items-center text-gray-600 hover:text-orange-600">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                前へ：AIでデザインを効率化
            </a>
            <a href="ai-images.php" class="flex items-center bg-orange-600 text-white px-6 py-3 rounded-lg hover:bg-orange-700">
                次へ：AIで画像生成
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </a>
        </div>
    </main>

<?php include 'includes/footer.php'; ?>
