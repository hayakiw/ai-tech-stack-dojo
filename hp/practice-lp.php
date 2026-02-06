<?php
$page_title = 'LP制作 - AI×ホームページ制作 | AI Tech Stack';
$current_page = 'practice';
$section_name = '第3部：実践サイト制作';
$step_number = 10;
$total_steps = 14;

include 'includes/header.php';
include 'includes/progress.php';
?>

    <!-- メインコンテンツ -->
    <main class="container mx-auto px-6 py-12 max-w-4xl">
        <h1 class="text-4xl font-bold mb-8">LP（ランディングページ）制作</h1>

        <!-- イントロ -->
        <div class="bg-orange-50 border-l-4 border-orange-500 p-6 mb-8">
            <p class="text-lg">LPは「1つの目的」に特化したページ。購入、登録、お問い合わせなど、訪問者に行動を起こしてもらうことがゴールです。</p>
        </div>

        <!-- セクション1 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-orange-200">LPの基本構成</h2>

            <div class="bg-white p-6 rounded-lg shadow">
                <div class="space-y-4">
                    <div class="flex items-start">
                        <div class="bg-orange-500 text-white px-3 py-1 rounded font-bold mr-4 text-sm">1</div>
                        <div>
                            <h4 class="font-bold">ファーストビュー</h4>
                            <p class="text-sm text-gray-600">キャッチコピー、サブコピー、CTA</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <div class="bg-orange-500 text-white px-3 py-1 rounded font-bold mr-4 text-sm">2</div>
                        <div>
                            <h4 class="font-bold">問題提起</h4>
                            <p class="text-sm text-gray-600">「こんなお悩みありませんか？」</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <div class="bg-orange-500 text-white px-3 py-1 rounded font-bold mr-4 text-sm">3</div>
                        <div>
                            <h4 class="font-bold">解決策の提示</h4>
                            <p class="text-sm text-gray-600">商品・サービスの紹介</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <div class="bg-orange-500 text-white px-3 py-1 rounded font-bold mr-4 text-sm">4</div>
                        <div>
                            <h4 class="font-bold">特徴・メリット</h4>
                            <p class="text-sm text-gray-600">選ばれる理由、他との違い</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <div class="bg-orange-500 text-white px-3 py-1 rounded font-bold mr-4 text-sm">5</div>
                        <div>
                            <h4 class="font-bold">お客様の声・実績</h4>
                            <p class="text-sm text-gray-600">社会的証明で信頼性アップ</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <div class="bg-orange-500 text-white px-3 py-1 rounded font-bold mr-4 text-sm">6</div>
                        <div>
                            <h4 class="font-bold">よくある質問</h4>
                            <p class="text-sm text-gray-600">不安を解消</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <div class="bg-orange-500 text-white px-3 py-1 rounded font-bold mr-4 text-sm">7</div>
                        <div>
                            <h4 class="font-bold">CTA（行動喚起）</h4>
                            <p class="text-sm text-gray-600">申し込みボタン、フォーム</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- 事前準備 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-orange-200">事前準備</h2>

            <div class="bg-white p-6 rounded-lg shadow">
                <p class="mb-4">まず、LP用のプロジェクトフォルダを作成し、Claude Codeを起動しましょう。</p>

                <div class="bg-gray-800 text-gray-100 p-4 rounded text-sm mb-4">
                    <pre class="whitespace-pre-wrap">mkdir lp-site && cd lp-site</pre>
                </div>

                <p class="mb-4">フォルダに移動したら、Claude Codeを起動します。</p>

                <div class="bg-gray-800 text-gray-100 p-4 rounded text-sm">
                    <pre class="whitespace-pre-wrap">claude</pre>
                </div>

                <div class="mt-4 bg-orange-50 p-4 rounded">
                    <p class="text-sm text-orange-700"><strong>ポイント：</strong>LPは1ファイル（index.html）で完結させるのが基本です。複数ページに分ける必要はありません。</p>
                </div>
            </div>
        </section>

        <!-- Step 1: LPを一括作成 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-orange-200">Step 1：LPを一括作成</h2>

            <div class="space-y-6">
                <p>Claude Codeに以下のプロンプトを入力して、LP全体を一括で作成してもらいましょう。</p>

                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold text-lg mb-4 text-orange-600">Claude Codeへの指示</h3>
                    <div class="bg-gray-800 text-gray-100 p-4 rounded text-sm">
                        <pre class="whitespace-pre-wrap">オンライン英会話サービス「Global English」のLPを作成します。index.htmlとして1ページ完結のLPを作成してください。Tailwind CSS CDN使用。以下のセクション全てを含めてください：ファーストビュー、お悩みセクション、サービス紹介、3つの特徴、料金プラン、お客様の声、よくある質問、CTA</pre>
                    </div>
                </div>

                <div class="bg-orange-50 border-l-4 border-orange-500 p-4">
                    <p class="text-sm"><strong>ポイント：</strong>Claude Codeはこのプロンプトだけで、すべてのセクションを含んだ完全なLPを<code>index.html</code>として自動生成してくれます。ファイルの作成・保存もClaude Codeが行います。</p>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold text-lg mb-4 text-orange-600">生成されるコード（完成イメージ）</h3>
                    <p class="text-sm text-gray-600 mb-4">Claude Codeが以下のようなコードを生成します。内容を確認してみましょう。</p>
                    <div class="bg-gray-800 text-gray-100 p-4 rounded text-sm overflow-x-auto">
                        <pre class="whitespace-pre-wrap">&lt;!DOCTYPE html&gt;
&lt;html lang="ja"&gt;
&lt;head&gt;
    &lt;meta charset="UTF-8"&gt;
    &lt;meta name="viewport" content="width=device-width, initial-scale=1.0"&gt;
    &lt;title&gt;Global English - 3ヶ月で英語が話せる&lt;/title&gt;
    &lt;script src="https://cdn.tailwindcss.com"&gt;&lt;/script&gt;
    &lt;style&gt;
        html { scroll-behavior: smooth; }
    &lt;/style&gt;
&lt;/head&gt;
&lt;body class="bg-white text-gray-800"&gt;

    &lt;!-- ファーストビュー --&gt;
    &lt;section class="bg-gradient-to-br from-blue-600 to-indigo-800 text-white py-24"&gt;
        &lt;div class="container mx-auto px-6 text-center"&gt;
            &lt;p class="text-blue-200 text-lg mb-4"&gt;オンライン英会話サービス&lt;/p&gt;
            &lt;h1 class="text-4xl md:text-6xl font-bold mb-6"&gt;3ヶ月で英語が話せる&lt;/h1&gt;
            &lt;p class="text-xl md:text-2xl mb-8 text-blue-100"&gt;ビジネス英語に特化したマンツーマンレッスン&lt;/p&gt;
            &lt;a href="#cta" class="inline-block bg-orange-500 hover:bg-orange-600 text-white font-bold py-4 px-10 rounded-full text-lg transition"&gt;
                無料体験を始める
            &lt;/a&gt;
            &lt;p class="mt-6 text-blue-200"&gt;受講者数 &lt;span class="text-white font-bold text-2xl"&gt;30,000人&lt;/span&gt; 突破&lt;/p&gt;
        &lt;/div&gt;
    &lt;/section&gt;

    &lt;!-- お悩みセクション --&gt;
    &lt;section class="py-20 bg-gray-50"&gt;
        &lt;div class="container mx-auto px-6 max-w-3xl"&gt;
            &lt;h2 class="text-3xl font-bold text-center mb-12"&gt;こんなお悩みありませんか？&lt;/h2&gt;
            &lt;div class="space-y-4"&gt;
                &lt;div class="flex items-center bg-white p-5 rounded-lg shadow"&gt;
                    &lt;span class="text-red-500 text-2xl mr-4"&gt;&#10003;&lt;/span&gt;
                    &lt;p class="text-lg"&gt;英語の会議で発言できない...&lt;/p&gt;
                &lt;/div&gt;
                &lt;div class="flex items-center bg-white p-5 rounded-lg shadow"&gt;
                    &lt;span class="text-red-500 text-2xl mr-4"&gt;&#10003;&lt;/span&gt;
                    &lt;p class="text-lg"&gt;海外出張が不安で仕方ない...&lt;/p&gt;
                &lt;/div&gt;
                &lt;div class="flex items-center bg-white p-5 rounded-lg shadow"&gt;
                    &lt;span class="text-red-500 text-2xl mr-4"&gt;&#10003;&lt;/span&gt;
                    &lt;p class="text-lg"&gt;昇進にTOEICスコアが必要...&lt;/p&gt;
                &lt;/div&gt;
                &lt;div class="flex items-center bg-white p-5 rounded-lg shadow"&gt;
                    &lt;span class="text-red-500 text-2xl mr-4"&gt;&#10003;&lt;/span&gt;
                    &lt;p class="text-lg"&gt;過去に英会話で挫折した経験がある...&lt;/p&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/section&gt;

    &lt;!-- サービス紹介 --&gt;
    &lt;section class="py-20"&gt;
        &lt;div class="container mx-auto px-6 text-center max-w-3xl"&gt;
            &lt;p class="text-blue-600 font-bold text-lg mb-2"&gt;その悩み、Global Englishが解決します&lt;/p&gt;
            &lt;h2 class="text-3xl font-bold mb-6"&gt;Global English&lt;/h2&gt;
            &lt;p class="text-lg text-gray-600 mb-8"&gt;
                Global Englishは、ビジネスシーンで使える実践的な英語力を最短3ヶ月で身につける
                オンライン英会話サービスです。あなた専用のカリキュラムで、確実に成果を出します。
            &lt;/p&gt;
            &lt;img src="https://placehold.co/800x400/e0e7ff/4f46e5?text=Global+English" alt="サービスイメージ" class="rounded-lg shadow-lg mx-auto"&gt;
        &lt;/div&gt;
    &lt;/section&gt;

    &lt;!-- 3つの特徴 --&gt;
    &lt;section class="py-20 bg-gray-50"&gt;
        &lt;div class="container mx-auto px-6"&gt;
            &lt;h2 class="text-3xl font-bold text-center mb-12"&gt;選ばれる3つの理由&lt;/h2&gt;
            &lt;div class="grid md:grid-cols-3 gap-8 max-w-5xl mx-auto"&gt;
                &lt;div class="bg-white p-8 rounded-lg shadow text-center"&gt;
                    &lt;div class="text-4xl mb-4"&gt;&#128336;&lt;/div&gt;
                    &lt;h3 class="text-xl font-bold mb-3"&gt;24時間予約可能&lt;/h3&gt;
                    &lt;p class="text-gray-600"&gt;早朝5時から深夜1時まで。忙しいビジネスパーソンでも自分のペースで続けられます。&lt;/p&gt;
                &lt;/div&gt;
                &lt;div class="bg-white p-8 rounded-lg shadow text-center"&gt;
                    &lt;div class="text-4xl mb-4"&gt;&#127760;&lt;/div&gt;
                    &lt;h3 class="text-xl font-bold mb-3"&gt;ネイティブ講師&lt;/h3&gt;
                    &lt;p class="text-gray-600"&gt;アメリカ・イギリス出身のネイティブ講師が500名以上在籍。本物の発音が身につきます。&lt;/p&gt;
                &lt;/div&gt;
                &lt;div class="bg-white p-8 rounded-lg shadow text-center"&gt;
                    &lt;div class="text-4xl mb-4"&gt;&#128188;&lt;/div&gt;
                    &lt;h3 class="text-xl font-bold mb-3"&gt;ビジネス特化&lt;/h3&gt;
                    &lt;p class="text-gray-600"&gt;会議・プレゼン・メールなどビジネスシーンに特化。すぐに仕事で使える英語を学べます。&lt;/p&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/section&gt;

    &lt;!-- 料金プラン --&gt;
    &lt;section class="py-20"&gt;
        &lt;div class="container mx-auto px-6"&gt;
            &lt;h2 class="text-3xl font-bold text-center mb-12"&gt;料金プラン&lt;/h2&gt;
            &lt;div class="grid md:grid-cols-3 gap-8 max-w-5xl mx-auto"&gt;
                &lt;div class="bg-white border-2 border-gray-200 rounded-lg p-8 text-center"&gt;
                    &lt;h3 class="text-xl font-bold mb-2"&gt;ライト&lt;/h3&gt;
                    &lt;p class="text-gray-500 mb-4"&gt;月4回レッスン&lt;/p&gt;
                    &lt;p class="text-4xl font-bold text-blue-600 mb-2"&gt;&amp;yen;4,980&lt;/p&gt;
                    &lt;p class="text-gray-400 text-sm mb-6"&gt;/月（税込）&lt;/p&gt;
                    &lt;ul class="text-left text-sm space-y-2 mb-8"&gt;
                        &lt;li class="flex items-center"&gt;&lt;span class="text-green-500 mr-2"&gt;&#10003;&lt;/span&gt;1回25分のレッスン&lt;/li&gt;
                        &lt;li class="flex items-center"&gt;&lt;span class="text-green-500 mr-2"&gt;&#10003;&lt;/span&gt;教材使い放題&lt;/li&gt;
                        &lt;li class="flex items-center"&gt;&lt;span class="text-green-500 mr-2"&gt;&#10003;&lt;/span&gt;レッスン録画&lt;/li&gt;
                    &lt;/ul&gt;
                    &lt;a href="#cta" class="block border-2 border-blue-600 text-blue-600 hover:bg-blue-600 hover:text-white font-bold py-3 rounded-lg transition"&gt;選択する&lt;/a&gt;
                &lt;/div&gt;
                &lt;div class="bg-white border-2 border-blue-600 rounded-lg p-8 text-center relative"&gt;
                    &lt;div class="absolute -top-4 left-1/2 -translate-x-1/2 bg-blue-600 text-white px-4 py-1 rounded-full text-sm font-bold"&gt;人気No.1&lt;/div&gt;
                    &lt;h3 class="text-xl font-bold mb-2"&gt;スタンダード&lt;/h3&gt;
                    &lt;p class="text-gray-500 mb-4"&gt;月8回レッスン&lt;/p&gt;
                    &lt;p class="text-4xl font-bold text-blue-600 mb-2"&gt;&amp;yen;9,800&lt;/p&gt;
                    &lt;p class="text-gray-400 text-sm mb-6"&gt;/月（税込）&lt;/p&gt;
                    &lt;ul class="text-left text-sm space-y-2 mb-8"&gt;
                        &lt;li class="flex items-center"&gt;&lt;span class="text-green-500 mr-2"&gt;&#10003;&lt;/span&gt;1回25分のレッスン&lt;/li&gt;
                        &lt;li class="flex items-center"&gt;&lt;span class="text-green-500 mr-2"&gt;&#10003;&lt;/span&gt;教材使い放題&lt;/li&gt;
                        &lt;li class="flex items-center"&gt;&lt;span class="text-green-500 mr-2"&gt;&#10003;&lt;/span&gt;レッスン録画&lt;/li&gt;
                        &lt;li class="flex items-center"&gt;&lt;span class="text-green-500 mr-2"&gt;&#10003;&lt;/span&gt;学習プラン作成&lt;/li&gt;
                    &lt;/ul&gt;
                    &lt;a href="#cta" class="block bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 rounded-lg transition"&gt;選択する&lt;/a&gt;
                &lt;/div&gt;
                &lt;div class="bg-white border-2 border-gray-200 rounded-lg p-8 text-center"&gt;
                    &lt;h3 class="text-xl font-bold mb-2"&gt;プレミアム&lt;/h3&gt;
                    &lt;p class="text-gray-500 mb-4"&gt;毎日レッスン&lt;/p&gt;
                    &lt;p class="text-4xl font-bold text-blue-600 mb-2"&gt;&amp;yen;19,800&lt;/p&gt;
                    &lt;p class="text-gray-400 text-sm mb-6"&gt;/月（税込）&lt;/p&gt;
                    &lt;ul class="text-left text-sm space-y-2 mb-8"&gt;
                        &lt;li class="flex items-center"&gt;&lt;span class="text-green-500 mr-2"&gt;&#10003;&lt;/span&gt;1回25分のレッスン&lt;/li&gt;
                        &lt;li class="flex items-center"&gt;&lt;span class="text-green-500 mr-2"&gt;&#10003;&lt;/span&gt;教材使い放題&lt;/li&gt;
                        &lt;li class="flex items-center"&gt;&lt;span class="text-green-500 mr-2"&gt;&#10003;&lt;/span&gt;レッスン録画&lt;/li&gt;
                        &lt;li class="flex items-center"&gt;&lt;span class="text-green-500 mr-2"&gt;&#10003;&lt;/span&gt;学習プラン作成&lt;/li&gt;
                        &lt;li class="flex items-center"&gt;&lt;span class="text-green-500 mr-2"&gt;&#10003;&lt;/span&gt;専属コーチ付き&lt;/li&gt;
                    &lt;/ul&gt;
                    &lt;a href="#cta" class="block border-2 border-blue-600 text-blue-600 hover:bg-blue-600 hover:text-white font-bold py-3 rounded-lg transition"&gt;選択する&lt;/a&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/section&gt;

    &lt;!-- お客様の声 --&gt;
    &lt;section class="py-20 bg-gray-50"&gt;
        &lt;div class="container mx-auto px-6"&gt;
            &lt;h2 class="text-3xl font-bold text-center mb-12"&gt;お客様の声&lt;/h2&gt;
            &lt;div class="grid md:grid-cols-3 gap-8 max-w-5xl mx-auto"&gt;
                &lt;div class="bg-white p-6 rounded-lg shadow"&gt;
                    &lt;div class="flex items-center mb-4"&gt;
                        &lt;img src="https://placehold.co/60x60/dbeafe/3b82f6?text=A" alt="受講者" class="w-12 h-12 rounded-full mr-4"&gt;
                        &lt;div&gt;
                            &lt;p class="font-bold"&gt;田中さん（30代・IT企業）&lt;/p&gt;
                            &lt;p class="text-yellow-400 text-sm"&gt;&#9733;&#9733;&#9733;&#9733;&#9733;&lt;/p&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                    &lt;p class="text-gray-600 text-sm"&gt;3ヶ月で海外クライアントとの会議に自信を持って参加できるようになりました。ビジネス特化の教材が本当に役立ちます。&lt;/p&gt;
                &lt;/div&gt;
                &lt;div class="bg-white p-6 rounded-lg shadow"&gt;
                    &lt;div class="flex items-center mb-4"&gt;
                        &lt;img src="https://placehold.co/60x60/dbeafe/3b82f6?text=B" alt="受講者" class="w-12 h-12 rounded-full mr-4"&gt;
                        &lt;div&gt;
                            &lt;p class="font-bold"&gt;佐藤さん（40代・商社）&lt;/p&gt;
                            &lt;p class="text-yellow-400 text-sm"&gt;&#9733;&#9733;&#9733;&#9733;&#9733;&lt;/p&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                    &lt;p class="text-gray-600 text-sm"&gt;早朝の時間を活用して毎日レッスン。TOEICスコアが200点アップしました。講師の質が非常に高いです。&lt;/p&gt;
                &lt;/div&gt;
                &lt;div class="bg-white p-6 rounded-lg shadow"&gt;
                    &lt;div class="flex items-center mb-4"&gt;
                        &lt;img src="https://placehold.co/60x60/dbeafe/3b82f6?text=C" alt="受講者" class="w-12 h-12 rounded-full mr-4"&gt;
                        &lt;div&gt;
                            &lt;p class="font-bold"&gt;鈴木さん（20代・メーカー）&lt;/p&gt;
                            &lt;p class="text-yellow-400 text-sm"&gt;&#9733;&#9733;&#9733;&#9733;&#9734;&lt;/p&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                    &lt;p class="text-gray-600 text-sm"&gt;過去に2回挫折しましたが、専属コーチのおかげで続けられています。海外出張も怖くなくなりました！&lt;/p&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/section&gt;

    &lt;!-- よくある質問 --&gt;
    &lt;section class="py-20"&gt;
        &lt;div class="container mx-auto px-6 max-w-3xl"&gt;
            &lt;h2 class="text-3xl font-bold text-center mb-12"&gt;よくある質問&lt;/h2&gt;
            &lt;div class="space-y-4"&gt;
                &lt;div class="border rounded-lg"&gt;
                    &lt;button onclick="this.nextElementSibling.classList.toggle('hidden')" class="w-full text-left p-5 font-bold flex justify-between items-center hover:bg-gray-50"&gt;
                        &lt;span&gt;Q. 全くの英語初心者でも大丈夫ですか？&lt;/span&gt;
                        &lt;span class="text-gray-400"&gt;+&lt;/span&gt;
                    &lt;/button&gt;
                    &lt;div class="hidden px-5 pb-5 text-gray-600"&gt;
                        はい、初心者向けのカリキュラムも充実しています。レベルチェックテストで最適なプランをご提案します。
                    &lt;/div&gt;
                &lt;/div&gt;
                &lt;div class="border rounded-lg"&gt;
                    &lt;button onclick="this.nextElementSibling.classList.toggle('hidden')" class="w-full text-left p-5 font-bold flex justify-between items-center hover:bg-gray-50"&gt;
                        &lt;span&gt;Q. 1回のレッスンは何分ですか？&lt;/span&gt;
                        &lt;span class="text-gray-400"&gt;+&lt;/span&gt;
                    &lt;/button&gt;
                    &lt;div class="hidden px-5 pb-5 text-gray-600"&gt;
                        1回25分です。集中力が続く最適な時間設定で、効率よく学習できます。
                    &lt;/div&gt;
                &lt;/div&gt;
                &lt;div class="border rounded-lg"&gt;
                    &lt;button onclick="this.nextElementSibling.classList.toggle('hidden')" class="w-full text-left p-5 font-bold flex justify-between items-center hover:bg-gray-50"&gt;
                        &lt;span&gt;Q. 途中でプラン変更はできますか？&lt;/span&gt;
                        &lt;span class="text-gray-400"&gt;+&lt;/span&gt;
                    &lt;/button&gt;
                    &lt;div class="hidden px-5 pb-5 text-gray-600"&gt;
                        はい、毎月プラン変更が可能です。マイページからいつでも変更手続きができます。
                    &lt;/div&gt;
                &lt;/div&gt;
                &lt;div class="border rounded-lg"&gt;
                    &lt;button onclick="this.nextElementSibling.classList.toggle('hidden')" class="w-full text-left p-5 font-bold flex justify-between items-center hover:bg-gray-50"&gt;
                        &lt;span&gt;Q. 無料体験の内容を教えてください&lt;/span&gt;
                        &lt;span class="text-gray-400"&gt;+&lt;/span&gt;
                    &lt;/button&gt;
                    &lt;div class="hidden px-5 pb-5 text-gray-600"&gt;
                        25分の体験レッスン1回と、レベルチェック&amp;学習プランの提案を無料で受けられます。
                    &lt;/div&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/section&gt;

    &lt;!-- CTA --&gt;
    &lt;section id="cta" class="py-20 bg-gradient-to-br from-blue-600 to-indigo-800 text-white"&gt;
        &lt;div class="container mx-auto px-6 text-center max-w-2xl"&gt;
            &lt;h2 class="text-3xl font-bold mb-4"&gt;まずは無料で体験してみませんか？&lt;/h2&gt;
            &lt;p class="text-blue-200 mb-8"&gt;25分の無料体験レッスン実施中。入会金0円キャンペーン中！&lt;/p&gt;
            &lt;a href="#" class="inline-block bg-orange-500 hover:bg-orange-600 text-white font-bold py-4 px-12 rounded-full text-xl transition"&gt;
                無料体験に申し込む
            &lt;/a&gt;
            &lt;p class="mt-4 text-blue-200 text-sm"&gt;※ クレジットカード不要。1分で登録完了。&lt;/p&gt;
        &lt;/div&gt;
    &lt;/section&gt;

    &lt;!-- フッター --&gt;
    &lt;footer class="bg-gray-900 text-gray-400 py-8 text-center"&gt;
        &lt;p&gt;&amp;copy; 2024 Global English. All rights reserved.&lt;/p&gt;
    &lt;/footer&gt;

&lt;/body&gt;
&lt;/html&gt;</pre>
                    </div>
                </div>

                <div class="bg-orange-50 border-l-4 border-orange-500 p-4">
                    <p class="text-sm"><strong>解説：</strong>このコードには以下の要素が含まれています。</p>
                    <ul class="text-sm mt-2 space-y-1 ml-4 list-disc">
                        <li><strong>スムーススクロール</strong> - <code>html { scroll-behavior: smooth; }</code> でCTAボタンクリック時になめらかにスクロール</li>
                        <li><strong>グラデーション背景</strong> - ファーストビューとCTAに青系グラデーションで統一感</li>
                        <li><strong>プレースホルダー画像</strong> - <code>placehold.co</code> を使用（後で実際の画像に差し替え）</li>
                        <li><strong>アコーディオンFAQ</strong> - JavaScriptの <code>onclick</code> で開閉するトグル式</li>
                        <li><strong>料金プランの強調</strong> - 「人気No.1」バッジでおすすめプランを目立たせる</li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- ブラウザで確認 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-orange-200">ブラウザで確認</h2>

            <div class="bg-green-50 border-l-4 border-green-500 p-6 rounded-lg">
                <h3 class="font-bold text-green-700 text-lg mb-4">確認チェックリスト</h3>
                <p class="mb-4">ファイルをブラウザで開いて、以下の点を確認しましょう。</p>

                <div class="bg-gray-800 text-gray-100 p-4 rounded text-sm mb-4">
                    <pre class="whitespace-pre-wrap">index.htmlをブラウザで開く（ファイルをダブルクリック、またはブラウザにドラッグ&amp;ドロップ）</pre>
                </div>

                <ul class="space-y-3">
                    <li class="flex items-start">
                        <span class="text-green-600 mr-2 font-bold">□</span>
                        <span>ファーストビューのキャッチコピーとCTAボタンが目立っているか</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-green-600 mr-2 font-bold">□</span>
                        <span>CTAボタン（「無料体験を始める」「選択する」）をクリックして、下部のCTAセクションにスムーススクロールするか</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-green-600 mr-2 font-bold">□</span>
                        <span>よくある質問のアコーディオンが開閉するか（クリックして確認）</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-green-600 mr-2 font-bold">□</span>
                        <span>ブラウザの幅を狭くして、スマホ表示でもレイアウトが崩れないか</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-green-600 mr-2 font-bold">□</span>
                        <span>料金プランが3カラムで並んでいるか（スマホでは縦並びになるか）</span>
                    </li>
                </ul>
            </div>
        </section>

        <!-- カスタマイズ -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-orange-200">カスタマイズ</h2>

            <div class="space-y-6">
                <p>サンプルのLPが完成したら、あなた自身のサービスに合わせてカスタマイズしましょう。Claude Codeに以下のように指示します。</p>

                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold text-lg mb-4 text-orange-600">自分のサービスに変更する</h3>
                    <div class="bg-gray-800 text-gray-100 p-4 rounded text-sm">
                        <pre class="whitespace-pre-wrap">このLPを以下のサービスに変更してください。

【サービス名】（あなたのサービス名）
【サービス内容】（サービスの説明）
【ターゲット】（想定するお客様）
【料金】（プラン名と価格）
【カラー】メインカラーを緑系に変更</pre>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold text-lg mb-4">カスタマイズのポイント</h3>
                    <div class="grid md:grid-cols-2 gap-4">
                        <div class="bg-orange-50 p-4 rounded">
                            <h4 class="font-bold text-orange-600 mb-2">カラーを変更</h4>
                            <p class="text-sm text-gray-600">Tailwindのカラー名を変更するだけ。<code>blue-600</code> を <code>green-600</code> に変えるなど。</p>
                        </div>
                        <div class="bg-orange-50 p-4 rounded">
                            <h4 class="font-bold text-orange-600 mb-2">コピーを変更</h4>
                            <p class="text-sm text-gray-600">キャッチコピーはサービスの一番の強みを短く伝える文に。数字を入れると効果的。</p>
                        </div>
                        <div class="bg-orange-50 p-4 rounded">
                            <h4 class="font-bold text-orange-600 mb-2">料金を変更</h4>
                            <p class="text-sm text-gray-600">プラン数は2〜3が適切。おすすめプランを目立たせましょう。</p>
                        </div>
                        <div class="bg-orange-50 p-4 rounded">
                            <h4 class="font-bold text-orange-600 mb-2">画像を差し替え</h4>
                            <p class="text-sm text-gray-600"><code>placehold.co</code>のURLを実際の画像パスに。お客様の顔写真があると信頼度アップ。</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- よくあるエラー -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-orange-200">よくあるエラー</h2>

            <div class="bg-red-50 border-l-4 border-red-500 p-6 rounded-lg">
                <h3 class="font-bold text-red-700 text-lg mb-4">トラブルシューティング</h3>
                <div class="space-y-4">
                    <div>
                        <p class="font-bold text-red-600">「アコーディオンが動かない」</p>
                        <p class="text-sm text-gray-700 mt-1">FAQの開閉が動作しない場合は、JavaScriptの <code>onclick</code> 属性が正しく書かれているか確認してください。<code>button</code> タグに <code>onclick="this.nextElementSibling.classList.toggle('hidden')"</code> が設定されている必要があります。Claude Codeに「FAQのアコーディオンが動きません。修正してください」と伝えましょう。</p>
                    </div>
                    <div class="border-t border-red-200 pt-4">
                        <p class="font-bold text-red-600">「スムーススクロールが効かない」</p>
                        <p class="text-sm text-gray-700 mt-1">CTAボタンをクリックしても一瞬で移動してしまう場合は、<code>&lt;style&gt;</code>タグ内に <code>html { scroll-behavior: smooth; }</code> があるか確認してください。また、リンク先の <code>href="#cta"</code> と対応する <code>id="cta"</code> が一致しているかもチェックしましょう。</p>
                    </div>
                    <div class="border-t border-red-200 pt-4">
                        <p class="font-bold text-red-600">「料金プランが横並びにならない」</p>
                        <p class="text-sm text-gray-700 mt-1">PC画面で料金プランが縦に並んでしまう場合は、<code>grid md:grid-cols-3</code> のクラスが正しく設定されているか確認してください。ブラウザの幅が768px以上あることも確認しましょう。</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- LPのコツ -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-orange-200">LPのコツ</h2>

            <div class="grid md:grid-cols-2 gap-4">
                <div class="bg-white p-4 rounded-lg shadow">
                    <h4 class="font-bold text-orange-600 mb-2">1ページ1目的</h4>
                    <p class="text-sm text-gray-600">複数の目的を混ぜない。リンクも最小限に</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h4 class="font-bold text-orange-600 mb-2">CTAは複数回</h4>
                    <p class="text-sm text-gray-600">スクロールに応じてCTAを配置</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h4 class="font-bold text-orange-600 mb-2">社会的証明</h4>
                    <p class="text-sm text-gray-600">お客様の声、導入実績、メディア掲載</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h4 class="font-bold text-orange-600 mb-2">緊急性・限定性</h4>
                    <p class="text-sm text-gray-600">「今だけ」「限定◯名」で行動を促す</p>
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
                        <span>LPは1つの目的に特化したページ</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-orange-600 mr-2">✓</span>
                        <span>問題提起→解決策→証拠→CTAの流れ</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-orange-600 mr-2">✓</span>
                        <span>Claude Codeで全セクションを一括生成できる</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-orange-600 mr-2">✓</span>
                        <span>CTAは複数配置、社会的証明で信頼性アップ</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-orange-600 mr-2">✓</span>
                        <span>サービス名・カラー・料金を変えるだけで自分のLPになる</span>
                    </li>
                </ul>
            </div>
        </section>

        <!-- ナビゲーション -->
        <div class="flex justify-between items-center pt-8 border-t">
            <a href="practice-business.php" class="flex items-center text-gray-600 hover:text-orange-600">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                前へ：ビジネスサイト制作
            </a>
            <a href="practice-blog.php" class="flex items-center bg-orange-600 text-white px-6 py-3 rounded-lg hover:bg-orange-700">
                次へ：ブログサイト制作
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </a>
        </div>
    </main>

<?php include 'includes/footer.php'; ?>
