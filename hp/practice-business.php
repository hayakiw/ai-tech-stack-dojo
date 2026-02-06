<?php
$page_title = 'ビジネスサイト制作 - AI×ホームページ制作 | AI Tech Stack';
$current_page = 'practice';
$section_name = '第3部：実践サイト制作';
$step_number = 9;
$total_steps = 14;

include 'includes/header.php';
include 'includes/progress.php';
?>

    <!-- メインコンテンツ -->
    <main class="container mx-auto px-6 py-12 max-w-4xl">
        <h1 class="text-4xl font-bold mb-8">ビジネスサイト制作</h1>

        <!-- イントロ -->
        <div class="bg-orange-50 border-l-4 border-orange-500 p-6 mb-8">
            <p class="text-lg">企業やお店のホームページ（コーポレートサイト）を作成します。信頼感と情報の分かりやすさを重視しましょう。</p>
        </div>

        <!-- セクション1 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-orange-200">ビジネスサイトの基本構成</h2>

            <div class="bg-white p-6 rounded-lg shadow mb-6">
                <h3 class="font-bold mb-4">必須ページ</h3>
                <div class="grid md:grid-cols-2 gap-4">
                    <div class="bg-gray-50 p-4 rounded">
                        <h4 class="font-bold text-orange-600 mb-2">トップページ</h4>
                        <p class="text-sm text-gray-600">会社の顔。事業内容を一目で伝える</p>
                    </div>
                    <div class="bg-gray-50 p-4 rounded">
                        <h4 class="font-bold text-orange-600 mb-2">サービス・事業内容</h4>
                        <p class="text-sm text-gray-600">提供するサービスの詳細</p>
                    </div>
                    <div class="bg-gray-50 p-4 rounded">
                        <h4 class="font-bold text-orange-600 mb-2">会社概要</h4>
                        <p class="text-sm text-gray-600">会社情報、代表挨拶、沿革など</p>
                    </div>
                    <div class="bg-gray-50 p-4 rounded">
                        <h4 class="font-bold text-orange-600 mb-2">お問い合わせ</h4>
                        <p class="text-sm text-gray-600">連絡先、問い合わせフォーム</p>
                    </div>
                </div>
            </div>

            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="font-bold mb-4">あると良いページ</h3>
                <div class="flex flex-wrap gap-2">
                    <span class="bg-orange-100 text-orange-700 px-3 py-1 rounded">実績・事例</span>
                    <span class="bg-orange-100 text-orange-700 px-3 py-1 rounded">お客様の声</span>
                    <span class="bg-orange-100 text-orange-700 px-3 py-1 rounded">よくある質問</span>
                    <span class="bg-orange-100 text-orange-700 px-3 py-1 rounded">採用情報</span>
                    <span class="bg-orange-100 text-orange-700 px-3 py-1 rounded">ニュース・お知らせ</span>
                    <span class="bg-orange-100 text-orange-700 px-3 py-1 rounded">アクセス</span>
                </div>
            </div>
        </section>

        <!-- 事前準備 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-orange-200">事前準備</h2>

            <div class="bg-white p-6 rounded-lg shadow">
                <p class="mb-4">まずはプロジェクト用のフォルダを作成し、Claude Codeを起動しましょう。</p>

                <div class="bg-gray-800 text-gray-100 p-4 rounded text-sm mb-4">
                    <pre class="whitespace-pre-wrap">mkdir business-site && cd business-site</pre>
                </div>

                <p class="mb-4">フォルダに移動したら、Claude Codeを起動します。</p>

                <div class="bg-gray-800 text-gray-100 p-4 rounded text-sm">
                    <pre class="whitespace-pre-wrap">claude</pre>
                </div>

                <div class="bg-orange-50 border-l-4 border-orange-500 p-4 mt-4">
                    <p class="text-sm"><strong>ポイント：</strong>Claude Codeは現在のフォルダをプロジェクトとして認識します。必ず専用フォルダの中で起動してください。</p>
                </div>
            </div>
        </section>

        <!-- Step 1: トップページ作成 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-orange-200">Step 1: トップページを作成</h2>

            <div class="space-y-6">
                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold text-lg mb-4 text-orange-600">Claude Codeへの指示</h3>
                    <p class="mb-4">以下のプロンプトをClaude Codeに入力してください。</p>
                    <div class="bg-orange-50 border-l-4 border-orange-500 p-4 mb-4">
                        <p class="text-sm font-bold mb-2">Claude Codeに以下を入力：</p>
                        <div class="bg-gray-800 text-gray-100 p-4 rounded text-sm">
                            <pre class="whitespace-pre-wrap">株式会社テクノソリューションのビジネスサイトを作成します。index.htmlとして以下のセクションを含む1ページを作成してください。Tailwind CSS CDN使用。セクション：ヒーロー、選ばれる理由（3つ）、サービス紹介（3つ）、実績数値、お客様の声、CTA、フッター</pre>
                        </div>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold text-lg mb-4 text-orange-600">生成されるコード（index.html）</h3>
                    <p class="mb-4">Claude Codeが以下のようなコードを自動生成してファイルに保存します。</p>
                    <div class="bg-gray-800 text-gray-100 p-4 rounded text-sm overflow-x-auto">
                        <pre class="whitespace-pre-wrap"><code>&lt;!DOCTYPE html&gt;
&lt;html lang="ja"&gt;
&lt;head&gt;
    &lt;meta charset="UTF-8"&gt;
    &lt;meta name="viewport" content="width=device-width, initial-scale=1.0"&gt;
    &lt;title&gt;株式会社テクノソリューション | 中小企業のDXを、ともに。&lt;/title&gt;
    &lt;script src="https://cdn.tailwindcss.com"&gt;&lt;/script&gt;
&lt;/head&gt;
&lt;body class="bg-white text-gray-800"&gt;

    &lt;!-- ナビゲーション --&gt;
    &lt;nav class="bg-white shadow fixed w-full z-50"&gt;
        &lt;div class="container mx-auto px-6 py-4 flex items-center justify-between"&gt;
            &lt;a href="index.html" class="text-xl font-bold text-blue-900"&gt;TechnoSolution&lt;/a&gt;
            &lt;div class="hidden md:flex space-x-6 text-sm"&gt;
                &lt;a href="#reason" class="hover:text-blue-600"&gt;選ばれる理由&lt;/a&gt;
                &lt;a href="#service" class="hover:text-blue-600"&gt;サービス&lt;/a&gt;
                &lt;a href="#results" class="hover:text-blue-600"&gt;実績&lt;/a&gt;
                &lt;a href="#voice" class="hover:text-blue-600"&gt;お客様の声&lt;/a&gt;
                &lt;a href="company.html" class="hover:text-blue-600"&gt;会社概要&lt;/a&gt;
                &lt;a href="#cta" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700"&gt;お問い合わせ&lt;/a&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/nav&gt;

    &lt;!-- ヒーローセクション --&gt;
    &lt;section class="bg-gradient-to-r from-blue-900 to-blue-700 text-white pt-32 pb-20"&gt;
        &lt;div class="container mx-auto px-6 text-center"&gt;
            &lt;p class="text-blue-200 text-sm mb-4"&gt;株式会社テクノソリューション&lt;/p&gt;
            &lt;h1 class="text-4xl md:text-5xl font-bold mb-6"&gt;中小企業のDXを、ともに。&lt;/h1&gt;
            &lt;p class="text-lg text-blue-100 mb-8 max-w-2xl mx-auto"&gt;
                ITの力で、あなたのビジネスをもっと強く。&lt;br&gt;
                導入から運用まで、丁寧にサポートします。
            &lt;/p&gt;
            &lt;div class="flex flex-col sm:flex-row gap-4 justify-center"&gt;
                &lt;a href="#cta" class="bg-orange-500 text-white px-8 py-4 rounded-lg text-lg font-bold hover:bg-orange-600"&gt;
                    無料相談はこちら
                &lt;/a&gt;
                &lt;a href="#service" class="border-2 border-white text-white px-8 py-4 rounded-lg text-lg hover:bg-white hover:text-blue-900"&gt;
                    サービスを見る
                &lt;/a&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/section&gt;

    &lt;!-- 選ばれる理由 --&gt;
    &lt;section id="reason" class="py-20 bg-gray-50"&gt;
        &lt;div class="container mx-auto px-6"&gt;
            &lt;h2 class="text-3xl font-bold text-center mb-4"&gt;選ばれる3つの理由&lt;/h2&gt;
            &lt;p class="text-center text-gray-500 mb-12"&gt;多くの中小企業様に支持される理由&lt;/p&gt;
            &lt;div class="grid md:grid-cols-3 gap-8"&gt;
                &lt;div class="bg-white p-8 rounded-lg shadow text-center"&gt;
                    &lt;div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4"&gt;
                        &lt;svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"&gt;
                            &lt;path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"&gt;&lt;/path&gt;
                        &lt;/svg&gt;
                    &lt;/div&gt;
                    &lt;h3 class="text-xl font-bold mb-3"&gt;中小企業専門&lt;/h3&gt;
                    &lt;p class="text-gray-600"&gt;大企業向けの過剰なシステムではなく、御社の規模に最適なソリューションをご提案します。&lt;/p&gt;
                &lt;/div&gt;
                &lt;div class="bg-white p-8 rounded-lg shadow text-center"&gt;
                    &lt;div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4"&gt;
                        &lt;svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"&gt;
                            &lt;path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0z"&gt;&lt;/path&gt;
                        &lt;/svg&gt;
                    &lt;/div&gt;
                    &lt;h3 class="text-xl font-bold mb-3"&gt;丁寧なサポート&lt;/h3&gt;
                    &lt;p class="text-gray-600"&gt;導入後もお困りの際はいつでもご相談ください。専任担当が迅速に対応いたします。&lt;/p&gt;
                &lt;/div&gt;
                &lt;div class="bg-white p-8 rounded-lg shadow text-center"&gt;
                    &lt;div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4"&gt;
                        &lt;svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"&gt;
                            &lt;path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"&gt;&lt;/path&gt;
                        &lt;/svg&gt;
                    &lt;/div&gt;
                    &lt;h3 class="text-xl font-bold mb-3"&gt;15年の実績&lt;/h3&gt;
                    &lt;p class="text-gray-600"&gt;創業以来15年間、500社以上の企業様のIT化を支援してきた経験と実績があります。&lt;/p&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/section&gt;

    &lt;!-- サービス紹介 --&gt;
    &lt;section id="service" class="py-20"&gt;
        &lt;div class="container mx-auto px-6"&gt;
            &lt;h2 class="text-3xl font-bold text-center mb-4"&gt;サービス紹介&lt;/h2&gt;
            &lt;p class="text-center text-gray-500 mb-12"&gt;お客様の課題に合わせた3つのサービス&lt;/p&gt;
            &lt;div class="grid md:grid-cols-3 gap-8"&gt;
                &lt;div class="border rounded-lg overflow-hidden hover:shadow-lg transition"&gt;
                    &lt;div class="h-48 bg-blue-100 flex items-center justify-center"&gt;
                        &lt;svg class="w-16 h-16 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"&gt;
                            &lt;path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"&gt;&lt;/path&gt;
                        &lt;/svg&gt;
                    &lt;/div&gt;
                    &lt;div class="p-6"&gt;
                        &lt;h3 class="text-xl font-bold mb-2"&gt;ITコンサルティング&lt;/h3&gt;
                        &lt;p class="text-gray-600 mb-4"&gt;現状の業務フローを分析し、最適なIT活用プランをご提案。無駄なコストを削減します。&lt;/p&gt;
                        &lt;a href="#cta" class="text-blue-600 font-bold hover:underline"&gt;詳しく見る →&lt;/a&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
                &lt;div class="border rounded-lg overflow-hidden hover:shadow-lg transition"&gt;
                    &lt;div class="h-48 bg-green-100 flex items-center justify-center"&gt;
                        &lt;svg class="w-16 h-16 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"&gt;
                            &lt;path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"&gt;&lt;/path&gt;
                        &lt;/svg&gt;
                    &lt;/div&gt;
                    &lt;div class="p-6"&gt;
                        &lt;h3 class="text-xl font-bold mb-2"&gt;システム開発&lt;/h3&gt;
                        &lt;p class="text-gray-600 mb-4"&gt;業務管理システム、Webアプリケーションなど、御社専用のシステムをオーダーメイドで開発。&lt;/p&gt;
                        &lt;a href="#cta" class="text-blue-600 font-bold hover:underline"&gt;詳しく見る →&lt;/a&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
                &lt;div class="border rounded-lg overflow-hidden hover:shadow-lg transition"&gt;
                    &lt;div class="h-48 bg-purple-100 flex items-center justify-center"&gt;
                        &lt;svg class="w-16 h-16 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"&gt;
                            &lt;path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z"&gt;&lt;/path&gt;
                        &lt;/svg&gt;
                    &lt;/div&gt;
                    &lt;div class="p-6"&gt;
                        &lt;h3 class="text-xl font-bold mb-2"&gt;クラウド移行&lt;/h3&gt;
                        &lt;p class="text-gray-600 mb-4"&gt;オンプレミスからクラウドへの移行を安全に実施。コスト削減と業務効率化を同時に実現。&lt;/p&gt;
                        &lt;a href="#cta" class="text-blue-600 font-bold hover:underline"&gt;詳しく見る →&lt;/a&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/section&gt;

    &lt;!-- 実績数値 --&gt;
    &lt;section id="results" class="py-20 bg-blue-900 text-white"&gt;
        &lt;div class="container mx-auto px-6"&gt;
            &lt;h2 class="text-3xl font-bold text-center mb-12"&gt;数字で見るテクノソリューション&lt;/h2&gt;
            &lt;div class="grid md:grid-cols-3 gap-8 text-center"&gt;
                &lt;div&gt;
                    &lt;p class="text-5xl font-bold text-orange-400 mb-2"&gt;500社+&lt;/p&gt;
                    &lt;p class="text-blue-200"&gt;導入企業数&lt;/p&gt;
                &lt;/div&gt;
                &lt;div&gt;
                    &lt;p class="text-5xl font-bold text-orange-400 mb-2"&gt;98%&lt;/p&gt;
                    &lt;p class="text-blue-200"&gt;お客様満足度&lt;/p&gt;
                &lt;/div&gt;
                &lt;div&gt;
                    &lt;p class="text-5xl font-bold text-orange-400 mb-2"&gt;15年&lt;/p&gt;
                    &lt;p class="text-blue-200"&gt;業界実績&lt;/p&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/section&gt;

    &lt;!-- お客様の声 --&gt;
    &lt;section id="voice" class="py-20 bg-gray-50"&gt;
        &lt;div class="container mx-auto px-6"&gt;
            &lt;h2 class="text-3xl font-bold text-center mb-12"&gt;お客様の声&lt;/h2&gt;
            &lt;div class="grid md:grid-cols-3 gap-8"&gt;
                &lt;div class="bg-white p-6 rounded-lg shadow"&gt;
                    &lt;div class="flex items-center mb-4"&gt;
                        &lt;div class="w-12 h-12 bg-blue-200 rounded-full flex items-center justify-center font-bold text-blue-700"&gt;A&lt;/div&gt;
                        &lt;div class="ml-3"&gt;
                            &lt;p class="font-bold"&gt;製造業 A社様&lt;/p&gt;
                            &lt;p class="text-sm text-gray-500"&gt;従業員50名&lt;/p&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                    &lt;p class="text-gray-600"&gt;「在庫管理システムの導入で、作業時間が半分になりました。丁寧なサポートで安心して任せられました。」&lt;/p&gt;
                &lt;/div&gt;
                &lt;div class="bg-white p-6 rounded-lg shadow"&gt;
                    &lt;div class="flex items-center mb-4"&gt;
                        &lt;div class="w-12 h-12 bg-green-200 rounded-full flex items-center justify-center font-bold text-green-700"&gt;B&lt;/div&gt;
                        &lt;div class="ml-3"&gt;
                            &lt;p class="font-bold"&gt;小売業 B社様&lt;/p&gt;
                            &lt;p class="text-sm text-gray-500"&gt;従業員20名&lt;/p&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                    &lt;p class="text-gray-600"&gt;「クラウド移行でテレワークが可能に。コロナ禍でも事業を継続できたのはテクノソリューションさんのおかげです。」&lt;/p&gt;
                &lt;/div&gt;
                &lt;div class="bg-white p-6 rounded-lg shadow"&gt;
                    &lt;div class="flex items-center mb-4"&gt;
                        &lt;div class="w-12 h-12 bg-purple-200 rounded-full flex items-center justify-center font-bold text-purple-700"&gt;C&lt;/div&gt;
                        &lt;div class="ml-3"&gt;
                            &lt;p class="font-bold"&gt;サービス業 C社様&lt;/p&gt;
                            &lt;p class="text-sm text-gray-500"&gt;従業員30名&lt;/p&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                    &lt;p class="text-gray-600"&gt;「ITに詳しくない私たちにも分かりやすく説明してくれました。売上管理が格段にラクになりました。」&lt;/p&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/section&gt;

    &lt;!-- CTAセクション --&gt;
    &lt;section id="cta" class="py-20 bg-gradient-to-r from-blue-900 to-blue-700 text-white"&gt;
        &lt;div class="container mx-auto px-6 text-center"&gt;
            &lt;h2 class="text-3xl font-bold mb-4"&gt;まずは無料でご相談ください&lt;/h2&gt;
            &lt;p class="text-blue-200 mb-8 max-w-xl mx-auto"&gt;
                「何から始めればいいか分からない」でも大丈夫。&lt;br&gt;
                御社の課題をお聞きし、最適なプランをご提案します。
            &lt;/p&gt;
            &lt;a href="#" class="inline-block bg-orange-500 text-white px-10 py-4 rounded-lg text-lg font-bold hover:bg-orange-600"&gt;
                無料相談に申し込む
            &lt;/a&gt;
            &lt;p class="text-blue-300 text-sm mt-4"&gt;お電話でもお気軽に：03-1234-5678（平日9:00-18:00）&lt;/p&gt;
        &lt;/div&gt;
    &lt;/section&gt;

    &lt;!-- フッター --&gt;
    &lt;footer class="bg-gray-900 text-gray-400 py-12"&gt;
        &lt;div class="container mx-auto px-6"&gt;
            &lt;div class="grid md:grid-cols-3 gap-8 mb-8"&gt;
                &lt;div&gt;
                    &lt;h3 class="text-white font-bold text-lg mb-4"&gt;株式会社テクノソリューション&lt;/h3&gt;
                    &lt;p class="text-sm"&gt;〒100-0001&lt;br&gt;東京都千代田区千代田1-1-1&lt;br&gt;TEL: 03-1234-5678&lt;/p&gt;
                &lt;/div&gt;
                &lt;div&gt;
                    &lt;h3 class="text-white font-bold mb-4"&gt;サービス&lt;/h3&gt;
                    &lt;ul class="space-y-2 text-sm"&gt;
                        &lt;li&gt;&lt;a href="#" class="hover:text-white"&gt;ITコンサルティング&lt;/a&gt;&lt;/li&gt;
                        &lt;li&gt;&lt;a href="#" class="hover:text-white"&gt;システム開発&lt;/a&gt;&lt;/li&gt;
                        &lt;li&gt;&lt;a href="#" class="hover:text-white"&gt;クラウド移行&lt;/a&gt;&lt;/li&gt;
                    &lt;/ul&gt;
                &lt;/div&gt;
                &lt;div&gt;
                    &lt;h3 class="text-white font-bold mb-4"&gt;企業情報&lt;/h3&gt;
                    &lt;ul class="space-y-2 text-sm"&gt;
                        &lt;li&gt;&lt;a href="company.html" class="hover:text-white"&gt;会社概要&lt;/a&gt;&lt;/li&gt;
                        &lt;li&gt;&lt;a href="#" class="hover:text-white"&gt;お知らせ&lt;/a&gt;&lt;/li&gt;
                        &lt;li&gt;&lt;a href="#" class="hover:text-white"&gt;お問い合わせ&lt;/a&gt;&lt;/li&gt;
                    &lt;/ul&gt;
                &lt;/div&gt;
            &lt;/div&gt;
            &lt;div class="border-t border-gray-700 pt-8 text-center text-sm"&gt;
                &lt;p&gt;&amp;copy; 2024 株式会社テクノソリューション All Rights Reserved.&lt;/p&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/footer&gt;

&lt;/body&gt;
&lt;/html&gt;</code></pre>
                    </div>
                </div>
            </div>
        </section>

        <!-- Step 2: 会社概要ページ作成 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-orange-200">Step 2: 会社概要ページを作成</h2>

            <div class="space-y-6">
                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold text-lg mb-4 text-orange-600">Claude Codeへの指示</h3>
                    <p class="mb-4">続けて会社概要ページを作成します。index.htmlと同じデザインテーマで統一しましょう。</p>
                    <div class="bg-orange-50 border-l-4 border-orange-500 p-4 mb-4">
                        <p class="text-sm font-bold mb-2">Claude Codeに以下を入力：</p>
                        <div class="bg-gray-800 text-gray-100 p-4 rounded text-sm">
                            <pre class="whitespace-pre-wrap">company.htmlとして会社概要ページを作成してください。index.htmlと同じナビゲーションとフッターを使用。会社名、代表者名、設立年月、資本金、従業員数、所在地、事業内容、主要取引先を表形式で掲載。地図埋め込み用のプレースホルダーエリアも含めてください。</pre>
                        </div>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold text-lg mb-4 text-orange-600">生成されるコード（company.html）</h3>
                    <p class="mb-4">Claude Codeが以下のようなコードを自動生成します。</p>
                    <div class="bg-gray-800 text-gray-100 p-4 rounded text-sm overflow-x-auto">
                        <pre class="whitespace-pre-wrap"><code>&lt;!DOCTYPE html&gt;
&lt;html lang="ja"&gt;
&lt;head&gt;
    &lt;meta charset="UTF-8"&gt;
    &lt;meta name="viewport" content="width=device-width, initial-scale=1.0"&gt;
    &lt;title&gt;会社概要 | 株式会社テクノソリューション&lt;/title&gt;
    &lt;script src="https://cdn.tailwindcss.com"&gt;&lt;/script&gt;
&lt;/head&gt;
&lt;body class="bg-white text-gray-800"&gt;

    &lt;!-- ナビゲーション --&gt;
    &lt;nav class="bg-white shadow fixed w-full z-50"&gt;
        &lt;div class="container mx-auto px-6 py-4 flex items-center justify-between"&gt;
            &lt;a href="index.html" class="text-xl font-bold text-blue-900"&gt;TechnoSolution&lt;/a&gt;
            &lt;div class="hidden md:flex space-x-6 text-sm"&gt;
                &lt;a href="index.html#reason" class="hover:text-blue-600"&gt;選ばれる理由&lt;/a&gt;
                &lt;a href="index.html#service" class="hover:text-blue-600"&gt;サービス&lt;/a&gt;
                &lt;a href="index.html#results" class="hover:text-blue-600"&gt;実績&lt;/a&gt;
                &lt;a href="index.html#voice" class="hover:text-blue-600"&gt;お客様の声&lt;/a&gt;
                &lt;a href="company.html" class="text-blue-600 font-bold"&gt;会社概要&lt;/a&gt;
                &lt;a href="index.html#cta" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700"&gt;お問い合わせ&lt;/a&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/nav&gt;

    &lt;!-- ページヘッダー --&gt;
    &lt;section class="bg-gradient-to-r from-blue-900 to-blue-700 text-white pt-32 pb-12"&gt;
        &lt;div class="container mx-auto px-6"&gt;
            &lt;h1 class="text-3xl font-bold"&gt;会社概要&lt;/h1&gt;
            &lt;p class="text-blue-200 mt-2"&gt;Company Information&lt;/p&gt;
        &lt;/div&gt;
    &lt;/section&gt;

    &lt;!-- 会社情報テーブル --&gt;
    &lt;section class="py-16"&gt;
        &lt;div class="container mx-auto px-6 max-w-3xl"&gt;
            &lt;table class="w-full"&gt;
                &lt;tbody&gt;
                    &lt;tr class="border-b"&gt;
                        &lt;th class="py-4 px-4 text-left bg-gray-50 w-1/3 font-bold"&gt;会社名&lt;/th&gt;
                        &lt;td class="py-4 px-4"&gt;株式会社テクノソリューション&lt;/td&gt;
                    &lt;/tr&gt;
                    &lt;tr class="border-b"&gt;
                        &lt;th class="py-4 px-4 text-left bg-gray-50 font-bold"&gt;代表者&lt;/th&gt;
                        &lt;td class="py-4 px-4"&gt;代表取締役 田中 太郎&lt;/td&gt;
                    &lt;/tr&gt;
                    &lt;tr class="border-b"&gt;
                        &lt;th class="py-4 px-4 text-left bg-gray-50 font-bold"&gt;設立&lt;/th&gt;
                        &lt;td class="py-4 px-4"&gt;2009年4月1日&lt;/td&gt;
                    &lt;/tr&gt;
                    &lt;tr class="border-b"&gt;
                        &lt;th class="py-4 px-4 text-left bg-gray-50 font-bold"&gt;資本金&lt;/th&gt;
                        &lt;td class="py-4 px-4"&gt;3,000万円&lt;/td&gt;
                    &lt;/tr&gt;
                    &lt;tr class="border-b"&gt;
                        &lt;th class="py-4 px-4 text-left bg-gray-50 font-bold"&gt;従業員数&lt;/th&gt;
                        &lt;td class="py-4 px-4"&gt;45名（2024年4月現在）&lt;/td&gt;
                    &lt;/tr&gt;
                    &lt;tr class="border-b"&gt;
                        &lt;th class="py-4 px-4 text-left bg-gray-50 font-bold"&gt;所在地&lt;/th&gt;
                        &lt;td class="py-4 px-4"&gt;〒100-0001 東京都千代田区千代田1-1-1&lt;/td&gt;
                    &lt;/tr&gt;
                    &lt;tr class="border-b"&gt;
                        &lt;th class="py-4 px-4 text-left bg-gray-50 font-bold"&gt;事業内容&lt;/th&gt;
                        &lt;td class="py-4 px-4"&gt;
                            ・ITコンサルティング&lt;br&gt;
                            ・業務システム開発&lt;br&gt;
                            ・クラウド移行支援&lt;br&gt;
                            ・IT研修・教育
                        &lt;/td&gt;
                    &lt;/tr&gt;
                    &lt;tr class="border-b"&gt;
                        &lt;th class="py-4 px-4 text-left bg-gray-50 font-bold"&gt;主要取引先&lt;/th&gt;
                        &lt;td class="py-4 px-4"&gt;
                            株式会社〇〇製作所&lt;br&gt;
                            △△商事株式会社&lt;br&gt;
                            □□サービス株式会社
                        &lt;/td&gt;
                    &lt;/tr&gt;
                &lt;/tbody&gt;
            &lt;/table&gt;
        &lt;/div&gt;
    &lt;/section&gt;

    &lt;!-- 地図エリア --&gt;
    &lt;section class="py-16 bg-gray-50"&gt;
        &lt;div class="container mx-auto px-6 max-w-3xl"&gt;
            &lt;h2 class="text-2xl font-bold mb-6"&gt;アクセス&lt;/h2&gt;
            &lt;!-- Google Maps埋め込みエリア --&gt;
            &lt;div class="bg-gray-300 h-64 rounded-lg flex items-center justify-center"&gt;
                &lt;p class="text-gray-500"&gt;ここにGoogle Mapsを埋め込み&lt;/p&gt;
            &lt;/div&gt;
            &lt;p class="mt-4 text-gray-600"&gt;
                JR東京駅 丸の内北口より徒歩5分&lt;br&gt;
                地下鉄大手町駅 C13b出口より徒歩3分
            &lt;/p&gt;
        &lt;/div&gt;
    &lt;/section&gt;

    &lt;!-- フッター --&gt;
    &lt;footer class="bg-gray-900 text-gray-400 py-12"&gt;
        &lt;div class="container mx-auto px-6"&gt;
            &lt;div class="grid md:grid-cols-3 gap-8 mb-8"&gt;
                &lt;div&gt;
                    &lt;h3 class="text-white font-bold text-lg mb-4"&gt;株式会社テクノソリューション&lt;/h3&gt;
                    &lt;p class="text-sm"&gt;〒100-0001&lt;br&gt;東京都千代田区千代田1-1-1&lt;br&gt;TEL: 03-1234-5678&lt;/p&gt;
                &lt;/div&gt;
                &lt;div&gt;
                    &lt;h3 class="text-white font-bold mb-4"&gt;サービス&lt;/h3&gt;
                    &lt;ul class="space-y-2 text-sm"&gt;
                        &lt;li&gt;&lt;a href="#" class="hover:text-white"&gt;ITコンサルティング&lt;/a&gt;&lt;/li&gt;
                        &lt;li&gt;&lt;a href="#" class="hover:text-white"&gt;システム開発&lt;/a&gt;&lt;/li&gt;
                        &lt;li&gt;&lt;a href="#" class="hover:text-white"&gt;クラウド移行&lt;/a&gt;&lt;/li&gt;
                    &lt;/ul&gt;
                &lt;/div&gt;
                &lt;div&gt;
                    &lt;h3 class="text-white font-bold mb-4"&gt;企業情報&lt;/h3&gt;
                    &lt;ul class="space-y-2 text-sm"&gt;
                        &lt;li&gt;&lt;a href="company.html" class="hover:text-white"&gt;会社概要&lt;/a&gt;&lt;/li&gt;
                        &lt;li&gt;&lt;a href="#" class="hover:text-white"&gt;お知らせ&lt;/a&gt;&lt;/li&gt;
                        &lt;li&gt;&lt;a href="#" class="hover:text-white"&gt;お問い合わせ&lt;/a&gt;&lt;/li&gt;
                    &lt;/ul&gt;
                &lt;/div&gt;
            &lt;/div&gt;
            &lt;div class="border-t border-gray-700 pt-8 text-center text-sm"&gt;
                &lt;p&gt;&amp;copy; 2024 株式会社テクノソリューション All Rights Reserved.&lt;/p&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/footer&gt;

&lt;/body&gt;
&lt;/html&gt;</code></pre>
                    </div>
                </div>
            </div>
        </section>

        <!-- ブラウザで確認 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-orange-200">ブラウザで確認</h2>

            <div class="bg-green-50 border-l-4 border-green-500 p-6 rounded-lg">
                <h3 class="font-bold text-lg mb-4 text-green-700">作成したページをチェックしましょう</h3>
                <div class="space-y-4">
                    <div>
                        <p class="font-bold mb-2">1. ファイルをブラウザで開く</p>
                        <p class="text-sm text-gray-700 mb-2">business-siteフォルダ内のindex.htmlをダブルクリック、またはブラウザにドラッグ&ドロップしてください。</p>
                    </div>
                    <div>
                        <p class="font-bold mb-2">2. レスポンシブ表示を確認</p>
                        <p class="text-sm text-gray-700 mb-2">ブラウザのウィンドウ幅を狭くして、スマホ表示になるか確認しましょう。ナビゲーション、カードレイアウト、テキストサイズが適切に変化するかチェックします。</p>
                    </div>
                    <div>
                        <p class="font-bold mb-2">3. ページ間リンクを確認</p>
                        <p class="text-sm text-gray-700 mb-2">ナビゲーションの「会社概要」リンクをクリックして、company.htmlに遷移するか確認します。company.htmlからもindex.htmlに戻れるか確認しましょう。</p>
                    </div>
                    <div>
                        <p class="font-bold mb-2">4. 各セクションのリンク確認</p>
                        <p class="text-sm text-gray-700 mb-2">「選ばれる理由」「サービス」「実績」「お客様の声」のナビリンクをクリックして、正しいセクションにスクロールするか確認します。</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- カスタマイズのポイント -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-orange-200">カスタマイズのポイント</h2>

            <div class="space-y-6">
                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold text-lg mb-4 text-orange-600">Claude Codeでまとめてカスタマイズ</h3>
                    <p class="mb-4">実際のビジネスサイトとして使う場合は、以下のように指示してカスタマイズしましょう。</p>
                    <div class="bg-orange-50 border-l-4 border-orange-500 p-4 mb-4">
                        <p class="text-sm font-bold mb-2">Claude Codeに以下を入力：</p>
                        <div class="bg-gray-800 text-gray-100 p-4 rounded text-sm">
                            <pre class="whitespace-pre-wrap">以下の変更をindex.htmlとcompany.htmlの両方に適用してください。
・会社名を「あなたの会社名」に変更
・カラーテーマを紺色系（blue-900）から緑系（emerald-800）に変更
・サービス内容を自社のものに変更（例：Webデザイン、SEO対策、SNS運用代行）
・電話番号と住所を自社のものに変更</pre>
                        </div>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold mb-4">変更すべき主な項目</h3>
                    <div class="grid md:grid-cols-2 gap-4">
                        <div class="bg-gray-50 p-4 rounded">
                            <h4 class="font-bold text-orange-600 mb-2">基本情報</h4>
                            <ul class="text-sm text-gray-600 space-y-1">
                                <li>・会社名・ロゴ</li>
                                <li>・住所・電話番号</li>
                                <li>・代表者名</li>
                                <li>・設立年・資本金</li>
                            </ul>
                        </div>
                        <div class="bg-gray-50 p-4 rounded">
                            <h4 class="font-bold text-orange-600 mb-2">コンテンツ</h4>
                            <ul class="text-sm text-gray-600 space-y-1">
                                <li>・キャッチコピー</li>
                                <li>・サービス内容</li>
                                <li>・実績数値</li>
                                <li>・お客様の声</li>
                            </ul>
                        </div>
                        <div class="bg-gray-50 p-4 rounded">
                            <h4 class="font-bold text-orange-600 mb-2">デザイン</h4>
                            <ul class="text-sm text-gray-600 space-y-1">
                                <li>・カラーテーマ</li>
                                <li>・フォント</li>
                                <li>・画像・写真</li>
                                <li>・アイコン</li>
                            </ul>
                        </div>
                        <div class="bg-gray-50 p-4 rounded">
                            <h4 class="font-bold text-orange-600 mb-2">機能</h4>
                            <ul class="text-sm text-gray-600 space-y-1">
                                <li>・Google Maps埋め込み</li>
                                <li>・お問い合わせフォーム</li>
                                <li>・SNSリンク</li>
                                <li>・ニュース更新欄</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- よくあるエラー -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-orange-200">よくあるエラーと対処法</h2>

            <div class="bg-red-50 border-l-4 border-red-500 p-6 rounded-lg">
                <h3 class="font-bold text-lg mb-4 text-red-700">トラブルシューティング</h3>
                <div class="space-y-4">
                    <div>
                        <p class="font-bold text-red-600">ナビゲーションのリンクが動かない</p>
                        <p class="text-sm text-gray-700">id属性がセクションに正しく設定されているか確認してください。例：&lt;section id="service"&gt;と&lt;a href="#service"&gt;が一致している必要があります。</p>
                    </div>
                    <div class="border-t border-red-200 pt-4">
                        <p class="font-bold text-red-600">会社概要ページに遷移できない</p>
                        <p class="text-sm text-gray-700">index.htmlとcompany.htmlが同じフォルダに入っているか確認してください。ファイル名の大文字・小文字も一致させましょう。</p>
                    </div>
                    <div class="border-t border-red-200 pt-4">
                        <p class="font-bold text-red-600">スマホ表示でレイアウトが崩れる</p>
                        <p class="text-sm text-gray-700">Tailwind CSSのレスポンシブクラス（md:, lg:）が正しく適用されているか確認します。Claude Codeに「スマホ表示でレイアウトが崩れています。修正してください」と伝えましょう。</p>
                    </div>
                    <div class="border-t border-red-200 pt-4">
                        <p class="font-bold text-red-600">Tailwind CSSが読み込まれない（スタイルが適用されない）</p>
                        <p class="text-sm text-gray-700">&lt;head&gt;内に<code class="bg-red-100 px-1 rounded">&lt;script src="https://cdn.tailwindcss.com"&gt;&lt;/script&gt;</code>が記載されているか確認してください。インターネット接続も必要です。</p>
                    </div>
                    <div class="border-t border-red-200 pt-4">
                        <p class="font-bold text-red-600">ナビゲーションが固定表示でコンテンツに被る</p>
                        <p class="text-sm text-gray-700">fixed指定のナビゲーションの場合、最初のセクションにpt-32などの上余白が必要です。Claude Codeに「ナビバーの下にコンテンツが隠れています。余白を追加してください」と伝えましょう。</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- ビジネスサイトのポイント -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-orange-200">ビジネスサイトのポイント</h2>

            <div class="grid md:grid-cols-2 gap-4">
                <div class="bg-white p-4 rounded-lg shadow">
                    <h4 class="font-bold text-orange-600 mb-2">信頼感を出す</h4>
                    <p class="text-sm text-gray-600">実績数値、資格、認証などを掲載</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h4 class="font-bold text-orange-600 mb-2">分かりやすく</h4>
                    <p class="text-sm text-gray-600">専門用語を避け、シンプルに伝える</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h4 class="font-bold text-orange-600 mb-2">行動を促す</h4>
                    <p class="text-sm text-gray-600">CTAボタンを適切に配置</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h4 class="font-bold text-orange-600 mb-2">更新しやすく</h4>
                    <p class="text-sm text-gray-600">ニュースやお知らせを更新できる設計</p>
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
                        <span>トップ、サービス、会社概要、お問い合わせが基本</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-orange-600 mr-2">&#10003;</span>
                        <span>信頼感と分かりやすさを重視</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-orange-600 mr-2">&#10003;</span>
                        <span>実績や数値で説得力を高める</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-orange-600 mr-2">&#10003;</span>
                        <span>CTAでお問い合わせへ誘導</span>
                    </li>
                </ul>
            </div>
        </section>

        <!-- ナビゲーション -->
        <div class="flex justify-between items-center pt-8 border-t">
            <a href="practice-portfolio.php" class="flex items-center text-gray-600 hover:text-orange-600">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                前へ：ポートフォリオサイト制作
            </a>
            <a href="practice-lp.php" class="flex items-center bg-orange-600 text-white px-6 py-3 rounded-lg hover:bg-orange-700">
                次へ：LP制作
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </a>
        </div>
    </main>

<?php include 'includes/footer.php'; ?>
