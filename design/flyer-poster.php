<?php
$page_title = 'チラシ・ポスター制作 - AI×デザイン | AI Tech Stack';
$current_page = 'practice';
$section_name = '第3部：実践デザイン制作';
$step_number = 11;
$total_steps = 14;

include 'includes/header.php';
include 'includes/progress.php';
?>

    <!-- メインコンテンツ -->
    <main class="container mx-auto px-6 py-12 max-w-4xl">
        <h1 class="text-4xl font-bold mb-8">チラシ・ポスター制作</h1>

        <!-- イントロ -->
        <div class="bg-fuchsia-50 border-l-4 border-fuchsia-500 p-6 mb-8">
            <p class="text-lg">チラシやポスターは情報を一目で伝える必要があります。視線誘導と情報整理のテクニックを学びましょう。</p>
        </div>

        <!-- セクション1 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-fuchsia-200">主なサイズと用途</h2>

            <div class="bg-white p-6 rounded-lg shadow">
                <div class="space-y-3 text-sm">
                    <div class="flex justify-between border-b pb-2">
                        <span class="font-bold">A4（210×297mm）</span>
                        <span class="text-gray-600">チラシ、配布物に最適</span>
                    </div>
                    <div class="flex justify-between border-b pb-2">
                        <span class="font-bold">A3（297×420mm）</span>
                        <span class="text-gray-600">小型ポスター、店内掲示</span>
                    </div>
                    <div class="flex justify-between border-b pb-2">
                        <span class="font-bold">B4（257×364mm）</span>
                        <span class="text-gray-600">新聞折込チラシ</span>
                    </div>
                    <div class="flex justify-between border-b pb-2">
                        <span class="font-bold">A2（420×594mm）</span>
                        <span class="text-gray-600">中型ポスター</span>
                    </div>
                    <div class="flex justify-between">
                        <span class="font-bold">B2（515×728mm）</span>
                        <span class="text-gray-600">大型ポスター、駅貼り</span>
                    </div>
                </div>
            </div>
        </section>

        <!-- セクション2 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-fuchsia-200">情報の優先順位</h2>

            <div class="space-y-4">
                <div class="bg-white p-6 rounded-lg shadow">
                    <div class="flex items-start">
                        <div class="bg-fuchsia-500 text-white px-3 py-1 rounded font-bold mr-4 text-sm">1</div>
                        <div>
                            <h3 class="font-bold">アイキャッチ（What）</h3>
                            <p class="text-gray-600 text-sm mt-1">何のチラシか一目でわかるビジュアルやキャッチコピー</p>
                        </div>
                    </div>
                </div>
                <div class="bg-white p-6 rounded-lg shadow">
                    <div class="flex items-start">
                        <div class="bg-fuchsia-500 text-white px-3 py-1 rounded font-bold mr-4 text-sm">2</div>
                        <div>
                            <h3 class="font-bold">ベネフィット（Why）</h3>
                            <p class="text-gray-600 text-sm mt-1">読者にとってのメリット、魅力</p>
                        </div>
                    </div>
                </div>
                <div class="bg-white p-6 rounded-lg shadow">
                    <div class="flex items-start">
                        <div class="bg-fuchsia-500 text-white px-3 py-1 rounded font-bold mr-4 text-sm">3</div>
                        <div>
                            <h3 class="font-bold">詳細情報（How/When/Where）</h3>
                            <p class="text-gray-600 text-sm mt-1">日時、場所、料金、申し込み方法など</p>
                        </div>
                    </div>
                </div>
                <div class="bg-white p-6 rounded-lg shadow">
                    <div class="flex items-start">
                        <div class="bg-fuchsia-500 text-white px-3 py-1 rounded font-bold mr-4 text-sm">4</div>
                        <div>
                            <h3 class="font-bold">行動喚起（CTA）</h3>
                            <p class="text-gray-600 text-sm mt-1">「今すぐ予約」「QRコードで申し込み」</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- セクション3 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-fuchsia-200">AIでチラシを作る</h2>

            <div class="space-y-6">
                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold text-fuchsia-600 mb-3">Step 1: Geminiで構成を考える</h3>
                    <div class="bg-gray-800 text-gray-100 p-4 rounded text-sm">
                        <pre class="whitespace-pre-wrap">以下のイベントのA4チラシの構成を考えてください。

【イベント】料理教室体験会
【日時】2024年4月20日（土）14:00〜
【場所】○○クッキングスタジオ
【参加費】3,000円
【定員】10名
【ターゲット】料理初心者、主婦

以下を提案してください：
1. キャッチコピー（15文字以内）
2. サブコピー
3. 掲載すべき情報と優先順位
4. レイアウトの提案（上部/中部/下部に何を配置するか）
5. 配色のアイデア</pre>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold text-fuchsia-600 mb-3">Step 2: 素材を準備</h3>
                    <ul class="text-sm text-gray-600 space-y-2">
                        <li>• 写真：イベントのイメージ写真（AI生成 or ストックフォト）</li>
                        <li>• アイコン：場所、時計、料金などの情報用</li>
                        <li>• ロゴ：主催者ロゴ</li>
                        <li>• QRコード：申し込みフォームへのリンク</li>
                    </ul>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold text-fuchsia-600 mb-3">Step 3: Canvaでデザイン</h3>
                    <ul class="text-sm text-gray-600 space-y-2">
                        <li>1. A4チラシのテンプレートを選択</li>
                        <li>2. 背景やメインビジュアルを配置</li>
                        <li>3. キャッチコピーを大きく配置（上部1/3）</li>
                        <li>4. 詳細情報を整理して配置（中部）</li>
                        <li>5. CTA、QRコード、連絡先を配置（下部）</li>
                        <li>6. 印刷用PDFで書き出し</li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- セクション4 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-fuchsia-200">レイアウトのコツ</h2>

            <div class="grid md:grid-cols-2 gap-4">
                <div class="bg-white p-4 rounded-lg shadow">
                    <h4 class="font-bold text-fuchsia-600 mb-2">Z型/F型の視線誘導</h4>
                    <p class="text-sm text-gray-600">左上→右上→左下→右下の流れを意識</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h4 class="font-bold text-fuchsia-600 mb-2">3分割法</h4>
                    <p class="text-sm text-gray-600">縦横3分割の交点に重要な要素を配置</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h4 class="font-bold text-fuchsia-600 mb-2">ジャンプ率</h4>
                    <p class="text-sm text-gray-600">見出しと本文のサイズ差を大きく</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h4 class="font-bold text-fuchsia-600 mb-2">色の限定</h4>
                    <p class="text-sm text-gray-600">メイン2色＋アクセント1色程度に</p>
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
                        <span>情報に優先順位をつける</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-fuchsia-600 mr-2">✓</span>
                        <span>アイキャッチ→ベネフィット→詳細→CTAの流れ</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-fuchsia-600 mr-2">✓</span>
                        <span>AIで構成とコピーを考える</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-fuchsia-600 mr-2">✓</span>
                        <span>視線誘導とジャンプ率を意識</span>
                    </li>
                </ul>
            </div>
        </section>

        <!-- ナビゲーション -->
        <div class="flex justify-between items-center pt-8 border-t">
            <a href="card-design.php" class="flex items-center text-gray-600 hover:text-fuchsia-600">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                前へ：名刺デザイン
            </a>
            <a href="brand-design.php" class="flex items-center bg-fuchsia-600 text-white px-6 py-3 rounded-lg hover:bg-fuchsia-700">
                次へ：ブランドデザイン
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </a>
        </div>
    </main>

<?php include 'includes/footer.php'; ?>
