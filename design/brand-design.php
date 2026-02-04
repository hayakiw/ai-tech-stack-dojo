<?php
$page_title = 'ブランドデザイン - AI×デザイン | AI Tech Stack';
$current_page = 'support';
$section_name = '第4部：応用とサポート';
$step_number = 12;
$total_steps = 14;

include 'includes/header.php';
include 'includes/progress.php';
?>

    <!-- メインコンテンツ -->
    <main class="container mx-auto px-6 py-12 max-w-4xl">
        <h1 class="text-4xl font-bold mb-8">ブランドデザイン</h1>

        <!-- イントロ -->
        <div class="bg-fuchsia-50 border-l-4 border-fuchsia-500 p-6 mb-8">
            <p class="text-lg">ブランドデザインとは、ロゴだけでなく、色、フォント、トーンなど全体の一貫性を作ること。統一感のあるブランドイメージを構築しましょう。</p>
        </div>

        <!-- セクション1 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-fuchsia-200">ブランドアイデンティティの要素</h2>

            <div class="space-y-4">
                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold text-lg text-fuchsia-600">ロゴ</h3>
                    <p class="text-gray-600 text-sm mt-2">ブランドの顔。シンボルマーク、ロゴタイプ、使用ルールを定義。</p>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold text-lg text-fuchsia-600">カラーパレット</h3>
                    <p class="text-gray-600 text-sm mt-2">プライマリカラー、セカンダリカラー、アクセントカラー。HEXコードで明確に定義。</p>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold text-lg text-fuchsia-600">タイポグラフィ</h3>
                    <p class="text-gray-600 text-sm mt-2">見出し用フォント、本文用フォント。サイズやウェイトのルール。</p>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold text-lg text-fuchsia-600">写真・イラストのスタイル</h3>
                    <p class="text-gray-600 text-sm mt-2">明るい、暗い、彩度、構図などのトーン。フィルターやエフェクト。</p>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold text-lg text-fuchsia-600">ボイス＆トーン</h3>
                    <p class="text-gray-600 text-sm mt-2">言葉遣い、話し方。フレンドリー、プロフェッショナル、カジュアル等。</p>
                </div>
            </div>
        </section>

        <!-- セクション2 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-fuchsia-200">ブランドガイドラインを作る</h2>

            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="font-bold text-fuchsia-600 mb-4">含めるべき項目</h3>
                <div class="space-y-4 text-sm">
                    <div class="border-l-4 border-fuchsia-300 pl-4">
                        <h4 class="font-bold">1. ブランドストーリー</h4>
                        <p class="text-gray-600">ミッション、ビジョン、価値観</p>
                    </div>
                    <div class="border-l-4 border-fuchsia-300 pl-4">
                        <h4 class="font-bold">2. ロゴの使用ルール</h4>
                        <p class="text-gray-600">最小サイズ、余白、NG例</p>
                    </div>
                    <div class="border-l-4 border-fuchsia-300 pl-4">
                        <h4 class="font-bold">3. カラー規定</h4>
                        <p class="text-gray-600">HEX、RGB、CMYK値、使用比率</p>
                    </div>
                    <div class="border-l-4 border-fuchsia-300 pl-4">
                        <h4 class="font-bold">4. フォント規定</h4>
                        <p class="text-gray-600">使用フォント、サイズ階層</p>
                    </div>
                    <div class="border-l-4 border-fuchsia-300 pl-4">
                        <h4 class="font-bold">5. 写真・画像スタイル</h4>
                        <p class="text-gray-600">トーン、構図、フィルター</p>
                    </div>
                    <div class="border-l-4 border-fuchsia-300 pl-4">
                        <h4 class="font-bold">6. 適用例</h4>
                        <p class="text-gray-600">名刺、Webサイト、SNSなどの実例</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- セクション3 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-fuchsia-200">AIでブランドガイドを作成</h2>

            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="font-bold text-fuchsia-600 mb-3">Geminiへのプロンプト例</h3>
                <div class="bg-gray-800 text-gray-100 p-4 rounded text-sm">
                    <pre class="whitespace-pre-wrap">以下のブランドのブランドガイドラインを作成してください。

【ブランド名】Bloom Beauty
【業種】オーガニックコスメ
【ターゲット】30代女性、ナチュラル志向
【ブランドイメージ】上品、ナチュラル、信頼感

以下の項目を含めてください：
1. ブランドストーリー（50文字程度）
2. カラーパレット（メイン、サブ、アクセント各1色、HEXコード付き）
3. 推奨フォント（日本語・英語）
4. 写真のトーン（明るさ、彩度、雰囲気）
5. ボイス＆トーン（言葉遣いの特徴）
6. NGルール（避けるべき表現やデザイン）</pre>
                </div>
            </div>
        </section>

        <!-- セクション4 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-fuchsia-200">一貫性を保つコツ</h2>

            <div class="grid md:grid-cols-2 gap-4">
                <div class="bg-white p-4 rounded-lg shadow">
                    <h4 class="font-bold text-fuchsia-600 mb-2">テンプレート化</h4>
                    <p class="text-sm text-gray-600">SNS投稿、名刺、チラシ等のテンプレートを用意</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h4 class="font-bold text-fuchsia-600 mb-2">素材ライブラリ</h4>
                    <p class="text-sm text-gray-600">使用可能な画像、アイコン、パターンを整理</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h4 class="font-bold text-fuchsia-600 mb-2">カラーパレット登録</h4>
                    <p class="text-sm text-gray-600">Canva等にブランドカラーを登録しておく</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h4 class="font-bold text-fuchsia-600 mb-2">チェックリスト</h4>
                    <p class="text-sm text-gray-600">制作物がガイドラインに沿っているか確認</p>
                </div>
            </div>
        </section>

        <!-- まとめ -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-fuchsia-200">まとめ</h2>
            <div class="bg-fuchsia-50 p-6 rounded-lg">
                <ul class="space-y-3">
                    <li class="flex items-start">
                        <span class="text-fuchsia-600 mr-2">✓</span>
                        <span>ブランドはロゴ＋色＋フォント＋トーンの統一</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-fuchsia-600 mr-2">✓</span>
                        <span>ブランドガイドラインでルールを明文化</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-fuchsia-600 mr-2">✓</span>
                        <span>AIでガイドライン作成を効率化</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-fuchsia-600 mr-2">✓</span>
                        <span>テンプレートと素材ライブラリで一貫性維持</span>
                    </li>
                </ul>
            </div>
        </section>

        <!-- ナビゲーション -->
        <div class="flex justify-between items-center pt-8 border-t">
            <a href="flyer-poster.php" class="flex items-center text-gray-600 hover:text-fuchsia-600">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                前へ：チラシ・ポスター制作
            </a>
            <a href="next-steps.php" class="flex items-center bg-fuchsia-600 text-white px-6 py-3 rounded-lg hover:bg-fuchsia-700">
                次へ：次のステップ
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </a>
        </div>
    </main>

<?php include 'includes/footer.php'; ?>
