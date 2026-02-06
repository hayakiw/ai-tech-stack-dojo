<?php
$page_title = 'ポートフォリオサイト制作 - AI×ホームページ制作 | AI Tech Stack';
$current_page = 'practice';
$section_name = '第3部：実践サイト制作';
$step_number = 8;
$total_steps = 14;

include 'includes/header.php';
include 'includes/progress.php';
?>

    <!-- メインコンテンツ -->
    <main class="container mx-auto px-6 py-12 max-w-4xl">
        <h1 class="text-4xl font-bold mb-8">ポートフォリオサイト制作</h1>

        <!-- イントロ -->
        <div class="bg-orange-50 border-l-4 border-orange-500 p-6 mb-8">
            <p class="text-lg">ポートフォリオサイトは自分をアピールする名刺代わり。AIを活用して、魅力的なポートフォリオを作りましょう。</p>
            <p class="text-sm text-gray-600 mt-2">このレッスンでは、Claude Codeを使って実際にポートフォリオサイトを1から作成します。完成コードも掲載しているので、初めての方でも安心です。</p>
        </div>

        <!-- ポートフォリオに必要な要素 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-orange-200">ポートフォリオに必要な要素</h2>

            <div class="grid md:grid-cols-2 gap-4">
                <div class="bg-white p-4 rounded-lg shadow">
                    <span class="text-2xl">👋</span>
                    <h4 class="font-bold mt-2 mb-1">自己紹介</h4>
                    <p class="text-sm text-gray-600">名前、肩書き、プロフィール写真</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <span class="text-2xl">💼</span>
                    <h4 class="font-bold mt-2 mb-1">実績・作品</h4>
                    <p class="text-sm text-gray-600">過去の制作物をビジュアルで紹介</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <span class="text-2xl">🛠️</span>
                    <h4 class="font-bold mt-2 mb-1">スキル</h4>
                    <p class="text-sm text-gray-600">得意な技術、使えるツール</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <span class="text-2xl">📧</span>
                    <h4 class="font-bold mt-2 mb-1">お問い合わせ</h4>
                    <p class="text-sm text-gray-600">連絡先、問い合わせフォーム</p>
                </div>
            </div>
        </section>

        <!-- 事前準備 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-orange-200">事前準備</h2>

            <div class="bg-white p-6 rounded-lg shadow mb-6">
                <h3 class="font-bold text-lg mb-4 text-orange-600">Claude Codeとは？</h3>
                <p class="text-gray-700 mb-4">Claude Codeは、Anthropic社が提供するAIコーディングアシスタントです。ターミナル（コマンドプロンプト）上で動作し、自然な日本語の指示でファイルの作成・編集を行ってくれます。プログラミング未経験でも、やりたいことを言葉で伝えるだけでコードを書いてくれる強力なツールです。</p>
            </div>

            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="font-bold text-lg mb-4 text-orange-600">プロジェクトフォルダの作成</h3>
                <p class="text-gray-700 mb-4">まず、ポートフォリオサイトのファイルを保存するフォルダを作成します。ターミナル（Windowsの場合はコマンドプロンプトまたはPowerShell）を開いて、以下のコマンドを入力してください。</p>

                <div class="bg-gray-800 text-gray-100 p-4 rounded text-sm mb-4">
                    <pre class="whitespace-pre-wrap">mkdir portfolio-site
cd portfolio-site</pre>
                </div>

                <p class="text-gray-700 mb-4">次に、Claude Codeを起動します。</p>

                <div class="bg-gray-800 text-gray-100 p-4 rounded text-sm mb-4">
                    <pre class="whitespace-pre-wrap">claude</pre>
                </div>

                <p class="text-sm text-gray-500">※ Claude Codeが未インストールの場合は、<code class="bg-gray-100 px-2 py-1 rounded text-orange-600">npm install -g @anthropic-ai/claude-code</code> でインストールしてください。</p>
            </div>
        </section>

        <!-- Step 1: プロジェクトの初期化 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-orange-200">Step 1: プロジェクトの初期化</h2>

            <p class="text-gray-700 mb-4">Claude Codeが起動したら、以下の指示を入力してください。AIがポートフォリオサイトのHTMLファイルを自動で作成してくれます。</p>

            <div class="bg-orange-50 border-l-4 border-orange-500 p-6 mb-6">
                <p class="font-bold text-orange-700 mb-2">Claude Codeに以下を入力：</p>
                <div class="bg-white p-4 rounded border text-sm">
                    <pre class="whitespace-pre-wrap">ポートフォリオサイトを作成します。以下の構成でindex.htmlファイルを作成してください。Tailwind CSS（CDN版）を使用。1ページ完結のスクロール型。セクション：ヒーロー、自己紹介、スキル、実績、お問い合わせ</pre>
                </div>
            </div>

            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="font-bold text-lg mb-3 text-gray-800">AIが行うこと</h3>
                <ul class="space-y-2 text-gray-700">
                    <li class="flex items-start">
                        <span class="text-orange-500 mr-2 mt-1">1.</span>
                        <span><code class="bg-gray-100 px-2 py-1 rounded text-sm">index.html</code> ファイルを新規作成します</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-orange-500 mr-2 mt-1">2.</span>
                        <span>Tailwind CSSのCDNリンクを含むHTML構造を生成します</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-orange-500 mr-2 mt-1">3.</span>
                        <span>指定した5つのセクション（ヒーロー、自己紹介、スキル、実績、お問い合わせ）を含むページを作成します</span>
                    </li>
                </ul>
                <p class="text-sm text-gray-500 mt-4">※ Claude Codeがファイルの作成許可を求めてきたら「Yes」を選択してください。</p>
            </div>
        </section>

        <!-- 完成コード -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-orange-200">完成コード</h2>

            <p class="text-gray-700 mb-4">Claude Codeが生成するコードは毎回少し異なりますが、以下のような完成形になります。このコードをそのままコピーして使うこともできます。</p>

            <div class="bg-white p-6 rounded-lg shadow">
                <div class="flex items-center justify-between mb-3">
                    <h3 class="font-bold text-lg text-orange-600">index.html</h3>
                    <span class="text-xs bg-gray-200 text-gray-600 px-3 py-1 rounded-full">コピーして使えます</span>
                </div>

                <div class="bg-gray-800 text-gray-100 p-4 rounded text-sm overflow-x-auto">
                    <pre class="whitespace-pre-wrap">&lt;!DOCTYPE html&gt;
&lt;html lang="ja"&gt;
&lt;head&gt;
    &lt;meta charset="UTF-8"&gt;
    &lt;meta name="viewport" content="width=device-width, initial-scale=1.0"&gt;
    &lt;title&gt;山田太郎 - Portfolio&lt;/title&gt;
    &lt;script src="https://cdn.tailwindcss.com"&gt;&lt;/script&gt;
    &lt;style&gt;
        html { scroll-behavior: smooth; }
    &lt;/style&gt;
&lt;/head&gt;
&lt;body class="bg-gray-50 text-gray-800"&gt;

    &lt;!-- ナビゲーション --&gt;
    &lt;nav class="fixed top-0 w-full bg-white/90 backdrop-blur shadow-sm z-50"&gt;
        &lt;div class="container mx-auto px-6 py-4 flex justify-between items-center"&gt;
            &lt;a href="#" class="text-xl font-bold text-gray-800"&gt;T.Yamada&lt;/a&gt;
            &lt;div class="hidden md:flex space-x-8"&gt;
                &lt;a href="#about" class="text-gray-600 hover:text-blue-600"&gt;自己紹介&lt;/a&gt;
                &lt;a href="#skills" class="text-gray-600 hover:text-blue-600"&gt;スキル&lt;/a&gt;
                &lt;a href="#works" class="text-gray-600 hover:text-blue-600"&gt;実績&lt;/a&gt;
                &lt;a href="#contact" class="text-gray-600 hover:text-blue-600"&gt;お問い合わせ&lt;/a&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/nav&gt;

    &lt;!-- ヒーローセクション --&gt;
    &lt;section class="min-h-screen flex items-center justify-center bg-gradient-to-br from-blue-600 to-purple-700 text-white"&gt;
        &lt;div class="text-center px-6"&gt;
            &lt;p class="text-lg mb-4 tracking-widest"&gt;Web Designer / UI Designer&lt;/p&gt;
            &lt;h1 class="text-5xl md:text-7xl font-bold mb-6"&gt;山田太郎&lt;/h1&gt;
            &lt;p class="text-xl md:text-2xl mb-10 text-blue-100"&gt;使いやすさを、美しさに。&lt;/p&gt;
            &lt;a href="#works" class="inline-block border-2 border-white px-8 py-3 rounded-full hover:bg-white hover:text-blue-700 transition"&gt;実績を見る&lt;/a&gt;
        &lt;/div&gt;
    &lt;/section&gt;

    &lt;!-- 自己紹介セクション --&gt;
    &lt;section id="about" class="py-20"&gt;
        &lt;div class="container mx-auto px-6 max-w-4xl"&gt;
            &lt;h2 class="text-3xl font-bold text-center mb-12"&gt;自己紹介&lt;/h2&gt;
            &lt;div class="flex flex-col md:flex-row items-center gap-12"&gt;
                &lt;div class="w-48 h-48 bg-gray-300 rounded-full flex items-center justify-center text-gray-500 text-sm"&gt;
                    写真
                &lt;/div&gt;
                &lt;div class="flex-1"&gt;
                    &lt;h3 class="text-2xl font-bold mb-4"&gt;山田 太郎&lt;span class="text-base font-normal text-gray-500 ml-3"&gt;Taro Yamada&lt;/span&gt;&lt;/h3&gt;
                    &lt;p class="text-gray-600 leading-relaxed mb-4"&gt;
                        東京を拠点に活動するWebデザイナーです。ユーザーにとって「使いやすく、美しい」デザインを追求しています。
                        企業サイトからWebアプリまで、幅広いプロジェクトに対応。クライアントの課題を丁寧にヒアリングし、
                        最適なデザインソリューションを提案します。
                    &lt;/p&gt;
                    &lt;p class="text-gray-600 leading-relaxed"&gt;
                        制作実績は50件以上。「デザインの力でビジネスを前に進める」をモットーに、
                        日々新しい技術やトレンドを学び続けています。
                    &lt;/p&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/section&gt;

    &lt;!-- スキルセクション --&gt;
    &lt;section id="skills" class="py-20 bg-white"&gt;
        &lt;div class="container mx-auto px-6 max-w-4xl"&gt;
            &lt;h2 class="text-3xl font-bold text-center mb-12"&gt;スキル&lt;/h2&gt;
            &lt;div class="grid md:grid-cols-2 gap-8"&gt;
                &lt;div&gt;
                    &lt;div class="flex justify-between mb-2"&gt;
                        &lt;span class="font-medium"&gt;HTML / CSS&lt;/span&gt;
                        &lt;span class="text-gray-500"&gt;90%&lt;/span&gt;
                    &lt;/div&gt;
                    &lt;div class="w-full bg-gray-200 rounded-full h-3"&gt;
                        &lt;div class="bg-blue-600 h-3 rounded-full" style="width: 90%"&gt;&lt;/div&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
                &lt;div&gt;
                    &lt;div class="flex justify-between mb-2"&gt;
                        &lt;span class="font-medium"&gt;JavaScript&lt;/span&gt;
                        &lt;span class="text-gray-500"&gt;75%&lt;/span&gt;
                    &lt;/div&gt;
                    &lt;div class="w-full bg-gray-200 rounded-full h-3"&gt;
                        &lt;div class="bg-yellow-500 h-3 rounded-full" style="width: 75%"&gt;&lt;/div&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
                &lt;div&gt;
                    &lt;div class="flex justify-between mb-2"&gt;
                        &lt;span class="font-medium"&gt;Figma&lt;/span&gt;
                        &lt;span class="text-gray-500"&gt;85%&lt;/span&gt;
                    &lt;/div&gt;
                    &lt;div class="w-full bg-gray-200 rounded-full h-3"&gt;
                        &lt;div class="bg-purple-500 h-3 rounded-full" style="width: 85%"&gt;&lt;/div&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
                &lt;div&gt;
                    &lt;div class="flex justify-between mb-2"&gt;
                        &lt;span class="font-medium"&gt;Photoshop / Illustrator&lt;/span&gt;
                        &lt;span class="text-gray-500"&gt;80%&lt;/span&gt;
                    &lt;/div&gt;
                    &lt;div class="w-full bg-gray-200 rounded-full h-3"&gt;
                        &lt;div class="bg-red-500 h-3 rounded-full" style="width: 80%"&gt;&lt;/div&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
                &lt;div&gt;
                    &lt;div class="flex justify-between mb-2"&gt;
                        &lt;span class="font-medium"&gt;WordPress&lt;/span&gt;
                        &lt;span class="text-gray-500"&gt;70%&lt;/span&gt;
                    &lt;/div&gt;
                    &lt;div class="w-full bg-gray-200 rounded-full h-3"&gt;
                        &lt;div class="bg-green-500 h-3 rounded-full" style="width: 70%"&gt;&lt;/div&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
                &lt;div&gt;
                    &lt;div class="flex justify-between mb-2"&gt;
                        &lt;span class="font-medium"&gt;UI/UXデザイン&lt;/span&gt;
                        &lt;span class="text-gray-500"&gt;85%&lt;/span&gt;
                    &lt;/div&gt;
                    &lt;div class="w-full bg-gray-200 rounded-full h-3"&gt;
                        &lt;div class="bg-indigo-500 h-3 rounded-full" style="width: 85%"&gt;&lt;/div&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/section&gt;

    &lt;!-- 実績セクション --&gt;
    &lt;section id="works" class="py-20"&gt;
        &lt;div class="container mx-auto px-6 max-w-5xl"&gt;
            &lt;h2 class="text-3xl font-bold text-center mb-12"&gt;実績&lt;/h2&gt;
            &lt;div class="grid md:grid-cols-3 gap-8"&gt;
                &lt;!-- 作品1 --&gt;
                &lt;div class="group relative overflow-hidden rounded-lg shadow-lg"&gt;
                    &lt;img src="https://via.placeholder.com/600x400/3b82f6/ffffff?text=Corporate+Site" alt="企業サイト" class="w-full h-64 object-cover group-hover:scale-110 transition duration-300"&gt;
                    &lt;div class="absolute inset-0 bg-blue-600/80 opacity-0 group-hover:opacity-100 transition duration-300 flex items-center justify-center"&gt;
                        &lt;div class="text-center text-white"&gt;
                            &lt;p class="font-bold text-lg"&gt;株式会社ABC コーポレートサイト&lt;/p&gt;
                            &lt;span class="text-sm bg-white/20 px-3 py-1 rounded-full mt-2 inline-block"&gt;企業サイト&lt;/span&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
                &lt;!-- 作品2 --&gt;
                &lt;div class="group relative overflow-hidden rounded-lg shadow-lg"&gt;
                    &lt;img src="https://via.placeholder.com/600x400/8b5cf6/ffffff?text=EC+Site" alt="ECサイト" class="w-full h-64 object-cover group-hover:scale-110 transition duration-300"&gt;
                    &lt;div class="absolute inset-0 bg-purple-600/80 opacity-0 group-hover:opacity-100 transition duration-300 flex items-center justify-center"&gt;
                        &lt;div class="text-center text-white"&gt;
                            &lt;p class="font-bold text-lg"&gt;Organic Shop ECサイト&lt;/p&gt;
                            &lt;span class="text-sm bg-white/20 px-3 py-1 rounded-full mt-2 inline-block"&gt;ECサイト&lt;/span&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
                &lt;!-- 作品3 --&gt;
                &lt;div class="group relative overflow-hidden rounded-lg shadow-lg"&gt;
                    &lt;img src="https://via.placeholder.com/600x400/10b981/ffffff?text=Web+App" alt="Webアプリ" class="w-full h-64 object-cover group-hover:scale-110 transition duration-300"&gt;
                    &lt;div class="absolute inset-0 bg-green-600/80 opacity-0 group-hover:opacity-100 transition duration-300 flex items-center justify-center"&gt;
                        &lt;div class="text-center text-white"&gt;
                            &lt;p class="font-bold text-lg"&gt;TaskFlow タスク管理アプリ&lt;/p&gt;
                            &lt;span class="text-sm bg-white/20 px-3 py-1 rounded-full mt-2 inline-block"&gt;Webアプリ&lt;/span&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/section&gt;

    &lt;!-- お問い合わせセクション --&gt;
    &lt;section id="contact" class="py-20 bg-white"&gt;
        &lt;div class="container mx-auto px-6 max-w-2xl"&gt;
            &lt;h2 class="text-3xl font-bold text-center mb-12"&gt;お問い合わせ&lt;/h2&gt;
            &lt;form class="space-y-6"&gt;
                &lt;div&gt;
                    &lt;label class="block text-sm font-medium mb-2"&gt;お名前&lt;/label&gt;
                    &lt;input type="text" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="山田 花子"&gt;
                &lt;/div&gt;
                &lt;div&gt;
                    &lt;label class="block text-sm font-medium mb-2"&gt;メールアドレス&lt;/label&gt;
                    &lt;input type="email" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="example@email.com"&gt;
                &lt;/div&gt;
                &lt;div&gt;
                    &lt;label class="block text-sm font-medium mb-2"&gt;メッセージ&lt;/label&gt;
                    &lt;textarea rows="5" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="お気軽にご連絡ください"&gt;&lt;/textarea&gt;
                &lt;/div&gt;
                &lt;button type="submit" class="w-full bg-blue-600 text-white py-3 rounded-lg hover:bg-blue-700 transition font-medium"&gt;送信する&lt;/button&gt;
            &lt;/form&gt;
        &lt;/div&gt;
    &lt;/section&gt;

    &lt;!-- フッター --&gt;
    &lt;footer class="bg-gray-800 text-white py-8 text-center"&gt;
        &lt;p class="text-gray-400"&gt;&amp;copy; 2024 Taro Yamada. All rights reserved.&lt;/p&gt;
    &lt;/footer&gt;

&lt;/body&gt;
&lt;/html&gt;</pre>
                </div>
            </div>

            <div class="bg-blue-50 border-l-4 border-blue-500 p-4 mt-6">
                <p class="text-sm text-blue-800"><strong>ポイント：</strong>上記のコードを <code class="bg-blue-100 px-1 rounded">index.html</code> という名前でファイルに保存するだけで、ポートフォリオサイトが完成します。Claude Codeを使えば自動で作成されますが、手動でコピー&ペーストしてもOKです。</p>
            </div>
        </section>

        <!-- ブラウザで確認 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-orange-200">ブラウザで確認</h2>

            <div class="bg-green-50 border-l-4 border-green-500 p-6 mb-6">
                <h3 class="font-bold text-green-800 mb-3">作成したサイトをブラウザで表示してみましょう</h3>
                <ol class="space-y-3 text-green-900">
                    <li class="flex items-start">
                        <span class="font-bold mr-2">1.</span>
                        <span>エクスプローラー（Finder）で <code class="bg-green-100 px-2 py-1 rounded">portfolio-site</code> フォルダを開きます</span>
                    </li>
                    <li class="flex items-start">
                        <span class="font-bold mr-2">2.</span>
                        <span><code class="bg-green-100 px-2 py-1 rounded">index.html</code> ファイルをダブルクリックします</span>
                    </li>
                    <li class="flex items-start">
                        <span class="font-bold mr-2">3.</span>
                        <span>ブラウザ（Chrome推奨）が自動的に開き、サイトが表示されます</span>
                    </li>
                </ol>
            </div>

            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="font-bold text-lg mb-4 text-orange-600">各セクションの確認ポイント</h3>
                <div class="space-y-4">
                    <div class="flex items-start">
                        <span class="bg-orange-100 text-orange-700 font-bold rounded-full w-8 h-8 flex items-center justify-center mr-3 flex-shrink-0">1</span>
                        <div>
                            <h4 class="font-bold mb-1">ヒーローセクション</h4>
                            <p class="text-sm text-gray-600">画面いっぱいに青~紫のグラデーション背景が表示され、中央に名前「山田太郎」とキャッチコピー「使いやすさを、美しさに。」が表示されます。「実績を見る」ボタンをクリックすると、実績セクションまでスクロールします。</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <span class="bg-orange-100 text-orange-700 font-bold rounded-full w-8 h-8 flex items-center justify-center mr-3 flex-shrink-0">2</span>
                        <div>
                            <h4 class="font-bold mb-1">自己紹介セクション</h4>
                            <p class="text-sm text-gray-600">丸いプロフィール写真エリア（プレースホルダー）の横に、名前とプロフィール文が表示されます。スマホでは縦並びになります。</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <span class="bg-orange-100 text-orange-700 font-bold rounded-full w-8 h-8 flex items-center justify-center mr-3 flex-shrink-0">3</span>
                        <div>
                            <h4 class="font-bold mb-1">スキルセクション</h4>
                            <p class="text-sm text-gray-600">色付きのプログレスバーで各スキルの習熟度が表示されます。HTML/CSS 90%、JavaScript 75%、Figma 85%など、視覚的にわかりやすくなっています。</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <span class="bg-orange-100 text-orange-700 font-bold rounded-full w-8 h-8 flex items-center justify-center mr-3 flex-shrink-0">4</span>
                        <div>
                            <h4 class="font-bold mb-1">実績セクション</h4>
                            <p class="text-sm text-gray-600">3つの作品カードが横並びで表示されます。カードにマウスを乗せると画像が拡大し、オーバーレイで作品名とカテゴリーが表示されます。</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <span class="bg-orange-100 text-orange-700 font-bold rounded-full w-8 h-8 flex items-center justify-center mr-3 flex-shrink-0">5</span>
                        <div>
                            <h4 class="font-bold mb-1">お問い合わせセクション</h4>
                            <p class="text-sm text-gray-600">お名前・メールアドレス・メッセージの入力フォームと「送信する」ボタンが表示されます。（このフォームは見た目のみで、実際の送信機能はありません）</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- カスタマイズ -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-orange-200">カスタマイズしてみよう</h2>

            <p class="text-gray-700 mb-4">サイトが表示されたら、次は自分の情報に置き換えていきましょう。Claude Codeに以下のように指示するだけで、簡単にカスタマイズできます。</p>

            <div class="bg-orange-50 border-l-4 border-orange-500 p-6 mb-6">
                <p class="font-bold text-orange-700 mb-2">Claude Codeに以下を入力：</p>
                <div class="bg-white p-4 rounded border text-sm">
                    <pre class="whitespace-pre-wrap">以下の変更をしてください：
・名前を「あなたの名前」に変更
・カラーテーマを青系から緑系に変更
・スキルの内容を以下に変更：
  - Webデザイン 85%
  - 動画編集 70%
  - SNS運用 90%
  - ライティング 75%
・プロフィール文を自分の自己紹介に変更</pre>
                </div>
            </div>

            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="font-bold text-lg mb-4 text-orange-600">カスタマイズのヒント</h3>
                <div class="grid md:grid-cols-2 gap-4">
                    <div class="bg-gray-50 p-4 rounded">
                        <h4 class="font-bold text-sm mb-2">色を変えたい場合</h4>
                        <p class="text-xs text-gray-600">「カラーテーマを赤系に変更して」「ヒーローの背景をオレンジのグラデーションにして」など、日本語で色の指示をするだけでOKです。</p>
                    </div>
                    <div class="bg-gray-50 p-4 rounded">
                        <h4 class="font-bold text-sm mb-2">セクションを追加したい場合</h4>
                        <p class="text-xs text-gray-600">「実績の下に"お客様の声"セクションを追加して」のように指示すると、新しいセクションが追加されます。</p>
                    </div>
                    <div class="bg-gray-50 p-4 rounded">
                        <h4 class="font-bold text-sm mb-2">プロフィール写真を入れたい場合</h4>
                        <p class="text-xs text-gray-600">写真ファイルを同じフォルダに入れて、「プロフィール写真を photo.jpg に変更して」と指示します。</p>
                    </div>
                    <div class="bg-gray-50 p-4 rounded">
                        <h4 class="font-bold text-sm mb-2">実績の画像を変えたい場合</h4>
                        <p class="text-xs text-gray-600">作品のスクリーンショットをフォルダに入れて、「作品1の画像を work1.jpg に変更して」と指示します。</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- よくあるエラー -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-orange-200">よくあるエラーと対処法</h2>

            <div class="space-y-4">
                <div class="bg-red-50 border-l-4 border-red-400 p-5">
                    <h4 class="font-bold text-red-700 mb-2">ページが真っ白になる</h4>
                    <div class="text-sm text-red-800 space-y-2">
                        <p><strong>原因1：</strong>Tailwind CSSのCDNが読み込めていない</p>
                        <p class="pl-4">対処 → インターネット接続を確認してください。オフラインではTailwind CDNが動作しません。HTMLの<code class="bg-red-100 px-1 rounded">&lt;head&gt;</code>内に <code class="bg-red-100 px-1 rounded">&lt;script src="https://cdn.tailwindcss.com"&gt;&lt;/script&gt;</code> があるか確認してください。</p>
                        <p><strong>原因2：</strong>HTMLタグの閉じ忘れ</p>
                        <p class="pl-4">対処 → Claude Codeに「HTMLの構文エラーがないかチェックして修正してください」と指示してください。</p>
                    </div>
                </div>

                <div class="bg-red-50 border-l-4 border-red-400 p-5">
                    <h4 class="font-bold text-red-700 mb-2">レイアウトが崩れる</h4>
                    <div class="text-sm text-red-800 space-y-2">
                        <p><strong>原因：</strong>Tailwind CSSのクラス名の打ち間違い</p>
                        <p class="pl-4">対処 → 手動でコードを編集した場合、クラス名にタイプミスがないか確認してください。例えば <code class="bg-red-100 px-1 rounded">flx</code>（正しくは <code class="bg-red-100 px-1 rounded">flex</code>）のような間違いです。Claude Codeに「レイアウトが崩れているので確認して修正して」と伝えると自動で直してくれます。</p>
                    </div>
                </div>

                <div class="bg-red-50 border-l-4 border-red-400 p-5">
                    <h4 class="font-bold text-red-700 mb-2">画像が表示されない</h4>
                    <div class="text-sm text-red-800 space-y-2">
                        <p><strong>原因：</strong>画像ファイルのパスが間違っている</p>
                        <p class="pl-4">対処 → 画像ファイルが <code class="bg-red-100 px-1 rounded">index.html</code> と同じフォルダにあるか確認してください。ファイル名の大文字・小文字も区別されるので注意（<code class="bg-red-100 px-1 rounded">Photo.jpg</code> と <code class="bg-red-100 px-1 rounded">photo.jpg</code> は別ファイルとして扱われます）。</p>
                    </div>
                </div>

                <div class="bg-red-50 border-l-4 border-red-400 p-5">
                    <h4 class="font-bold text-red-700 mb-2">スマホで見るとデザインが違う</h4>
                    <div class="text-sm text-red-800 space-y-2">
                        <p><strong>原因：</strong>レスポンシブ対応の問題</p>
                        <p class="pl-4">対処 → ブラウザの開発者ツール（F12キー）でスマホ表示を確認できます。Claude Codeに「スマホ表示で崩れている部分を修正して」と指示すると、レスポンシブ対応を調整してくれます。</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- ポートフォリオのコツ -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-orange-200">ポートフォリオのコツ</h2>

            <div class="space-y-4">
                <div class="bg-white p-4 rounded-lg shadow flex items-start">
                    <span class="text-green-500 text-xl mr-3">✓</span>
                    <div>
                        <h4 class="font-bold mb-1">実績は厳選する</h4>
                        <p class="text-sm text-gray-600">量より質。最も自信のある作品を3〜6点程度に絞る</p>
                    </div>
                </div>
                <div class="bg-white p-4 rounded-lg shadow flex items-start">
                    <span class="text-green-500 text-xl mr-3">✓</span>
                    <div>
                        <h4 class="font-bold mb-1">プロセスも見せる</h4>
                        <p class="text-sm text-gray-600">完成品だけでなく、制作過程や工夫した点も紹介</p>
                    </div>
                </div>
                <div class="bg-white p-4 rounded-lg shadow flex items-start">
                    <span class="text-green-500 text-xl mr-3">✓</span>
                    <div>
                        <h4 class="font-bold mb-1">更新を続ける</h4>
                        <p class="text-sm text-gray-600">定期的に新しい作品を追加して鮮度を保つ</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- まとめ -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-orange-200">まとめ</h2>
            <div class="bg-orange-50 p-6 rounded-lg">
                <ul class="space-y-3">
                    <li class="flex items-start">
                        <span class="text-orange-600 mr-2">✓</span>
                        <span>自己紹介、実績、スキル、連絡先が基本構成</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-orange-600 mr-2">✓</span>
                        <span>AIに構成→各セクションの順で作成を依頼</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-orange-600 mr-2">✓</span>
                        <span>実績は厳選して質を重視</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-orange-600 mr-2">✓</span>
                        <span>定期的に更新して最新の状態を保つ</span>
                    </li>
                </ul>
            </div>
        </section>

        <!-- ナビゲーション -->
        <div class="flex justify-between items-center pt-8 border-t">
            <a href="ai-images.php" class="flex items-center text-gray-600 hover:text-orange-600">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                前へ：AIで画像生成
            </a>
            <a href="practice-business.php" class="flex items-center bg-orange-600 text-white px-6 py-3 rounded-lg hover:bg-orange-700">
                次へ：ビジネスサイト制作
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </a>
        </div>
    </main>

<?php include 'includes/footer.php'; ?>
