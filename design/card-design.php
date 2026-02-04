<?php
$page_title = '名刺デザイン - AI×デザイン | AI Tech Stack';
$current_page = 'practice';
$section_name = '第3部：実践デザイン制作';
$step_number = 10;
$total_steps = 14;

include 'includes/header.php';
include 'includes/progress.php';
?>

    <!-- メインコンテンツ -->
    <main class="container mx-auto px-6 py-12 max-w-4xl">
        <h1 class="text-4xl font-bold mb-8">名刺デザイン</h1>

        <!-- イントロ -->
        <div class="bg-fuchsia-50 border-l-4 border-fuchsia-500 p-6 mb-8">
            <p class="text-lg">名刺はビジネスの第一印象。小さなスペースに必要な情報を美しく配置するコツを学びましょう。</p>
        </div>

        <!-- セクション1 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-fuchsia-200">名刺の基本情報</h2>

            <div class="grid md:grid-cols-2 gap-6">
                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold text-fuchsia-600 mb-4">標準サイズ</h3>
                    <ul class="space-y-2 text-sm text-gray-600">
                        <li>• 日本標準：91mm × 55mm</li>
                        <li>• 欧米標準：89mm × 51mm（3.5" × 2"）</li>
                        <li>• 塗り足し：各辺3mm追加</li>
                    </ul>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold text-fuchsia-600 mb-4">必須情報</h3>
                    <ul class="space-y-2 text-sm text-gray-600">
                        <li>• 氏名（ふりがな）</li>
                        <li>• 会社名・屋号</li>
                        <li>• 肩書き・役職</li>
                        <li>• 連絡先（電話、メール）</li>
                        <li>• 住所（必要に応じて）</li>
                        <li>• URL、SNS（必要に応じて）</li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- セクション2 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-fuchsia-200">レイアウトパターン</h2>

            <div class="space-y-4">
                <div class="bg-white p-4 rounded-lg shadow">
                    <h4 class="font-bold text-fuchsia-600 mb-2">横型・左揃え</h4>
                    <p class="text-sm text-gray-600">最もオーソドックス。ビジネスシーンで汎用的。</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h4 class="font-bold text-fuchsia-600 mb-2">横型・中央揃え</h4>
                    <p class="text-sm text-gray-600">バランスが取りやすい。フォーマルな印象。</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h4 class="font-bold text-fuchsia-600 mb-2">縦型</h4>
                    <p class="text-sm text-gray-600">和風、クリエイティブな印象。目立つ。</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h4 class="font-bold text-fuchsia-600 mb-2">両面デザイン</h4>
                    <p class="text-sm text-gray-600">表：シンプル、裏：詳細情報やビジュアル。</p>
                </div>
            </div>
        </section>

        <!-- セクション3 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-fuchsia-200">AIで名刺をデザイン</h2>

            <div class="space-y-6">
                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold text-fuchsia-600 mb-3">Step 1: Geminiでコンセプト</h3>
                    <div class="bg-gray-800 text-gray-100 p-4 rounded text-sm">
                        <pre class="whitespace-pre-wrap">以下の情報で名刺デザインのコンセプトを考えてください。

【職業】フリーランスWebデザイナー
【名前】山田太郎
【イメージ】モダン、クリエイティブ、信頼感

以下を提案してください：
1. レイアウトの方向性
2. 配色（HEXコード）
3. フォントのイメージ
4. あしらいやアクセントのアイデア
5. 表面・裏面の構成</pre>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold text-fuchsia-600 mb-3">Step 2: Canvaで制作</h3>
                    <ul class="text-sm text-gray-600 space-y-2">
                        <li>1. Canvaで「名刺」テンプレートを選択</li>
                        <li>2. 好みのテンプレートをベースにカスタマイズ</li>
                        <li>3. 自分の情報を入力</li>
                        <li>4. 配色、フォントを調整</li>
                        <li>5. ロゴやアイコンを追加</li>
                    </ul>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold text-fuchsia-600 mb-3">Step 3: 印刷用に書き出し</h3>
                    <ul class="text-sm text-gray-600 space-y-2">
                        <li>• PDF（印刷用）で書き出し</li>
                        <li>• 塗り足しを含めたサイズで</li>
                        <li>• カラーモード：CMYK推奨（印刷所による）</li>
                        <li>• 解像度：300dpi以上</li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- セクション4 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-fuchsia-200">デザインのコツ</h2>

            <div class="bg-white p-6 rounded-lg shadow">
                <ul class="space-y-3 text-sm">
                    <li class="flex items-start">
                        <span class="text-fuchsia-600 mr-2">✓</span>
                        <span><strong>余白を十分に</strong>：端から5mm以上は余白を。情報を詰め込みすぎない。</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-fuchsia-600 mr-2">✓</span>
                        <span><strong>名前を目立たせる</strong>：名前が一番大きく、読みやすく。</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-fuchsia-600 mr-2">✓</span>
                        <span><strong>フォントは読みやすく</strong>：本文は8pt以上。細すぎるフォントは避ける。</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-fuchsia-600 mr-2">✓</span>
                        <span><strong>情報のグループ化</strong>：連絡先はまとめて配置。近接の原則を活用。</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-fuchsia-600 mr-2">✓</span>
                        <span><strong>QRコードの活用</strong>：URL、SNS、ポートフォリオへの導線に。</span>
                    </li>
                </ul>
            </div>
        </section>

        <!-- まとめ -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-fuchsia-200">まとめ</h2>
            <div class="bg-fuchsia-50 p-6 rounded-lg">
                <ul class="space-y-3">
                    <li class="flex items-start">
                        <span class="text-fuchsia-600 mr-2">✓</span>
                        <span>日本標準サイズ：91mm × 55mm</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-fuchsia-600 mr-2">✓</span>
                        <span>必須情報：名前、会社名、肩書き、連絡先</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-fuchsia-600 mr-2">✓</span>
                        <span>Geminiでコンセプト→Canvaで制作</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-fuchsia-600 mr-2">✓</span>
                        <span>余白を活かし、名前を目立たせる</span>
                    </li>
                </ul>
            </div>
        </section>

        <!-- ナビゲーション -->
        <div class="flex justify-between items-center pt-8 border-t">
            <a href="banner-design.php" class="flex items-center text-gray-600 hover:text-fuchsia-600">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                前へ：バナーデザイン
            </a>
            <a href="flyer-poster.php" class="flex items-center bg-fuchsia-600 text-white px-6 py-3 rounded-lg hover:bg-fuchsia-700">
                次へ：チラシ・ポスター制作
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </a>
        </div>
    </main>

<?php include 'includes/footer.php'; ?>
