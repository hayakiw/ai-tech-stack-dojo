<?php
$page_title = 'AIで提案書作成 - AI×営業・セールス | AI Tech Stack';
$current_page = 'ai';
$section_name = '第2部：AI×営業ツール';
$step_number = 7;
$total_steps = 14;

include 'includes/header.php';
include 'includes/progress.php';
?>

    <!-- メインコンテンツ -->
    <main class="container mx-auto px-6 py-12 max-w-4xl">
        <h1 class="text-4xl font-bold mb-8">AIで提案書作成</h1>

        <!-- イントロ -->
        <div class="bg-blue-50 border-l-4 border-blue-500 p-6 mb-8">
            <p class="text-lg">提案書は受注を決める重要なドキュメント。AIを活用すれば、構成から文章作成まで効率的に作成できます。</p>
        </div>

        <!-- セクション1 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-blue-200">提案書の基本構成</h2>

            <div class="bg-white p-6 rounded-lg shadow">
                <div class="space-y-4">
                    <div class="flex items-start">
                        <div class="bg-blue-500 text-white px-3 py-1 rounded font-bold mr-4 text-sm">1</div>
                        <div>
                            <h4 class="font-bold">エグゼクティブサマリー</h4>
                            <p class="text-sm text-gray-600">提案の要点を1ページで。忙しい決裁者向け</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <div class="bg-blue-500 text-white px-3 py-1 rounded font-bold mr-4 text-sm">2</div>
                        <div>
                            <h4 class="font-bold">課題の整理</h4>
                            <p class="text-sm text-gray-600">顧客の現状と課題を明確化</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <div class="bg-blue-500 text-white px-3 py-1 rounded font-bold mr-4 text-sm">3</div>
                        <div>
                            <h4 class="font-bold">解決策の提案</h4>
                            <p class="text-sm text-gray-600">課題に対する具体的なソリューション</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <div class="bg-blue-500 text-white px-3 py-1 rounded font-bold mr-4 text-sm">4</div>
                        <div>
                            <h4 class="font-bold">導入効果・ROI</h4>
                            <p class="text-sm text-gray-600">期待される成果を数値で示す</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <div class="bg-blue-500 text-white px-3 py-1 rounded font-bold mr-4 text-sm">5</div>
                        <div>
                            <h4 class="font-bold">導入事例</h4>
                            <p class="text-sm text-gray-600">類似企業での成功事例</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <div class="bg-blue-500 text-white px-3 py-1 rounded font-bold mr-4 text-sm">6</div>
                        <div>
                            <h4 class="font-bold">スケジュール・費用</h4>
                            <p class="text-sm text-gray-600">導入計画と見積もり</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- セクション2 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-blue-200">AIで提案書を作成</h2>

            <div class="space-y-6">
                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold text-lg mb-4 text-blue-600">提案書の構成を作成</h3>
                    <div class="bg-gray-800 text-gray-100 p-4 rounded text-sm">
                        <pre class="whitespace-pre-wrap">以下の情報をもとに、提案書のアウトラインを作成してください。

【顧客情報】
・企業名：株式会社〇〇
・業種：製造業
・従業員数：300名
・課題：生産管理の効率化、在庫過多

【提案内容】
・製品：生産管理システム「〇〇」
・価格：初期費用500万円、月額30万円

【差別化ポイント】
・AIによる需要予測機能
・既存システムとの連携が容易

各セクションで書くべき内容のポイントも示してください。</pre>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold text-lg mb-4 text-blue-600">課題・効果セクションを作成</h3>
                    <div class="bg-gray-800 text-gray-100 p-4 rounded text-sm">
                        <pre class="whitespace-pre-wrap">提案書の「課題と解決策」セクションを作成してください。

【顧客の課題】
・生産計画が属人化している
・在庫が常に過剰で倉庫コストがかさむ
・急な需要変動に対応できない

【提案製品の機能】
・AIによる需要予測
・自動発注システム
・リアルタイム在庫管理

顧客視点で共感を得られる表現でお願いします。</pre>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold text-lg mb-4 text-blue-600">ROI試算を作成</h3>
                    <div class="bg-gray-800 text-gray-100 p-4 rounded text-sm">
                        <pre class="whitespace-pre-wrap">以下の条件でROI試算を作成してください。

【導入コスト】
・初期費用：500万円
・月額費用：30万円

【期待効果】
・在庫削減：20%（現在の在庫金額1億円）
・人件費削減：月20時間×3名（時給3,000円）
・欠品による機会損失削減：月100万円

投資回収期間と3年間のROIを計算し、
提案書に使えるグラフ用のデータも出力してください。</pre>
                    </div>
                </div>
            </div>
        </section>

        <!-- セクション3 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-blue-200">提案書作成のコツ</h2>

            <div class="grid md:grid-cols-2 gap-4">
                <div class="bg-white p-4 rounded-lg shadow">
                    <h4 class="font-bold text-blue-600 mb-2">顧客の言葉を使う</h4>
                    <p class="text-sm text-gray-600">ヒアリングで聞いた表現をそのまま使い、共感を得る</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h4 class="font-bold text-blue-600 mb-2">数値で示す</h4>
                    <p class="text-sm text-gray-600">効果は具体的な数値で。曖昧な表現は避ける</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h4 class="font-bold text-blue-600 mb-2">ビジュアルを活用</h4>
                    <p class="text-sm text-gray-600">図表やグラフで視覚的に理解しやすく</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h4 class="font-bold text-blue-600 mb-2">決裁者を意識</h4>
                    <p class="text-sm text-gray-600">忙しい人でも要点がわかるサマリーを</p>
                </div>
            </div>
        </section>

        <!-- まとめ -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-blue-200">まとめ</h2>
            <div class="bg-blue-50 p-6 rounded-lg">
                <ul class="space-y-3">
                    <li class="flex items-start">
                        <span class="text-blue-600 mr-2">✓</span>
                        <span>提案書は課題→解決策→効果→導入計画の流れ</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-blue-600 mr-2">✓</span>
                        <span>AIで構成・文章・ROI試算を効率的に作成</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-blue-600 mr-2">✓</span>
                        <span>顧客の言葉と具体的な数値を使う</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-blue-600 mr-2">✓</span>
                        <span>AIの出力は必ず自分の言葉で編集する</span>
                    </li>
                </ul>
            </div>
        </section>

        <!-- ナビゲーション -->
        <div class="flex justify-between items-center pt-8 border-t">
            <a href="ai-research.php" class="flex items-center text-gray-600 hover:text-blue-600">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                前へ：AIでリサーチ
            </a>
            <a href="email-sales.php" class="flex items-center bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700">
                次へ：メール営業
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </a>
        </div>
    </main>

<?php include 'includes/footer.php'; ?>
