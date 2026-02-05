<?php
$page_title = 'AIでデザインを効率化 - AI×ホームページ制作 | AI Tech Stack';
$current_page = 'tools';
$section_name = '第2部：AIツールの活用';
$step_number = 5;
$total_steps = 14;

include 'includes/header.php';
include 'includes/progress.php';
?>

    <!-- メインコンテンツ -->
    <main class="container mx-auto px-6 py-12 max-w-4xl">
        <h1 class="text-4xl font-bold mb-8">AIでデザインを効率化</h1>

        <!-- イントロ -->
        <div class="bg-orange-50 border-l-4 border-orange-500 p-6 mb-8">
            <p class="text-lg">AIを使えば、デザインの経験がなくてもプロ品質のWebサイトデザインが可能です。配色、レイアウト、コンポーネントすべてをAIに相談できます。</p>
        </div>

        <!-- セクション1 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-orange-200">AIでできるデザイン作業</h2>

            <div class="grid md:grid-cols-2 gap-4">
                <div class="bg-white p-4 rounded-lg shadow">
                    <span class="text-2xl">🎨</span>
                    <h4 class="font-bold mt-2 mb-1">配色提案</h4>
                    <p class="text-sm text-gray-600">業種やイメージに合った配色を提案</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <span class="text-2xl">📐</span>
                    <h4 class="font-bold mt-2 mb-1">レイアウト設計</h4>
                    <p class="text-sm text-gray-600">ページ構成やセクション配置を相談</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <span class="text-2xl">🧩</span>
                    <h4 class="font-bold mt-2 mb-1">UIコンポーネント</h4>
                    <p class="text-sm text-gray-600">ボタン、カード、フォームなどのデザイン</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <span class="text-2xl">✍️</span>
                    <h4 class="font-bold mt-2 mb-1">テキスト作成</h4>
                    <p class="text-sm text-gray-600">キャッチコピー、説明文の生成</p>
                </div>
            </div>
        </section>

        <!-- セクション2 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-orange-200">AIデザインツール</h2>

            <div class="space-y-4">
                <div class="bg-white p-6 rounded-lg shadow">
                    <div class="flex items-start">
                        <span class="text-3xl mr-4">💬</span>
                        <div class="flex-1">
                            <h3 class="font-bold text-lg mb-2">Gemini / Claude</h3>
                            <p class="text-gray-600 mb-3">テキストベースでデザイン相談、コード生成</p>
                            <div class="flex flex-wrap gap-2">
                                <span class="bg-orange-100 text-orange-700 px-2 py-1 rounded text-xs">配色相談</span>
                                <span class="bg-orange-100 text-orange-700 px-2 py-1 rounded text-xs">HTML/CSS生成</span>
                                <span class="bg-orange-100 text-orange-700 px-2 py-1 rounded text-xs">レイアウト提案</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <div class="flex items-start">
                        <span class="text-3xl mr-4">🎨</span>
                        <div class="flex-1">
                            <h3 class="font-bold text-lg mb-2">v0 by Vercel</h3>
                            <p class="text-gray-600 mb-3">テキストからUIコンポーネントを生成</p>
                            <div class="flex flex-wrap gap-2">
                                <span class="bg-blue-100 text-blue-700 px-2 py-1 rounded text-xs">UIコンポーネント</span>
                                <span class="bg-blue-100 text-blue-700 px-2 py-1 rounded text-xs">React/Tailwind</span>
                                <span class="bg-blue-100 text-blue-700 px-2 py-1 rounded text-xs">インタラクティブ</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <div class="flex items-start">
                        <span class="text-3xl mr-4">🖼️</span>
                        <div class="flex-1">
                            <h3 class="font-bold text-lg mb-2">Figma + AI プラグイン</h3>
                            <p class="text-gray-600 mb-3">デザインツール内でAI機能を活用</p>
                            <div class="flex flex-wrap gap-2">
                                <span class="bg-purple-100 text-purple-700 px-2 py-1 rounded text-xs">デザイン作成</span>
                                <span class="bg-purple-100 text-purple-700 px-2 py-1 rounded text-xs">自動レイアウト</span>
                                <span class="bg-purple-100 text-purple-700 px-2 py-1 rounded text-xs">コンテンツ生成</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- セクション3 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-orange-200">実践：AIでWebサイトをデザイン</h2>

            <div class="space-y-6">
                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold text-lg mb-4 text-orange-600">Step 1: 要件を整理</h3>
                    <div class="bg-gray-800 text-gray-100 p-4 rounded text-sm">
                        <pre class="whitespace-pre-wrap">以下のWebサイトのデザインを相談させてください。

【サイトの種類】個人のポートフォリオサイト
【目的】フリーランスのWebデザイナーとして仕事を獲得
【ターゲット】Web制作を依頼したい企業・個人
【イメージ】シンプル、洗練、クリエイティブ
【参考サイト】Awwwards掲載サイトのようなデザイン
【必要なページ】トップ、実績、スキル、お問い合わせ</pre>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold text-lg mb-4 text-orange-600">Step 2: 配色を決定</h3>
                    <div class="bg-gray-800 text-gray-100 p-4 rounded text-sm">
                        <pre class="whitespace-pre-wrap">上記のサイトに合う配色を提案してください。

・メインカラー、サブカラー、アクセントカラー
・背景色、テキスト色
・各色のHEXコードとTailwind CSSのクラス名
・配色の印象や効果の説明</pre>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold text-lg mb-4 text-orange-600">Step 3: レイアウトを設計</h3>
                    <div class="bg-gray-800 text-gray-100 p-4 rounded text-sm">
                        <pre class="whitespace-pre-wrap">トップページのレイアウトを提案してください。

各セクションについて：
・セクション名と目的
・含める要素
・レイアウトのイメージ（カラム数、配置など）
・Tailwind CSSでの実装方法の概要</pre>
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
                        <span>AIで配色、レイアウト、コンポーネントを相談できる</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-orange-600 mr-2">✓</span>
                        <span>Gemini/Claude、v0、Figma+AIなどのツールがある</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-orange-600 mr-2">✓</span>
                        <span>要件→配色→レイアウトの順で相談すると効率的</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-orange-600 mr-2">✓</span>
                        <span>具体的な要件を伝えるほど良い提案が得られる</span>
                    </li>
                </ul>
            </div>
        </section>

        <!-- ナビゲーション -->
        <div class="flex justify-between items-center pt-8 border-t">
            <a href="design-principles.php" class="flex items-center text-gray-600 hover:text-orange-600">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                前へ：デザインの基本原則
            </a>
            <a href="ai-coding.php" class="flex items-center bg-orange-600 text-white px-6 py-3 rounded-lg hover:bg-orange-700">
                次へ：AIでコーディング支援
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </a>
        </div>
    </main>

<?php include 'includes/footer.php'; ?>
