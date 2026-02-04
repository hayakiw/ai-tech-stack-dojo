<?php
$page_title = 'AI教材作成 - AI×人材育成・教育 | AI Tech Stack';
$current_page = 'ai';
$section_name = '第2部：AI×研修設計';
$step_number = 6;
$total_steps = 14;

include 'includes/header.php';
include 'includes/progress.php';
?>

    <!-- メインコンテンツ -->
    <main class="container mx-auto px-6 py-12 max-w-4xl">
        <h1 class="text-4xl font-bold mb-8">AI教材作成</h1>

        <!-- イントロ -->
        <div class="bg-sky-50 border-l-4 border-sky-500 p-6 mb-8">
            <p class="text-lg">AIを活用して、研修資料・マニュアル・教材を効率的に作成。品質を保ちながら作成時間を大幅短縮しましょう。</p>
        </div>

        <!-- セクション1 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-sky-200">研修資料の作成</h2>

            <div class="space-y-4">
                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold text-lg text-sky-600 mb-3">カリキュラム設計</h3>
                    <p class="text-gray-600 mb-4">研修の全体構成をAIと一緒に設計。目標設定から時間配分まで。</p>
                    <div class="bg-gray-800 text-gray-100 p-4 rounded text-sm">
                        <pre class="whitespace-pre-wrap">以下の研修のカリキュラムを設計してください。

【テーマ】ビジネスマナー研修
【対象】新入社員20名
【時間】1日（9:00-17:00）
【ゴール】基本的なビジネスマナーを身につけ、自信を持って顧客対応できる

・各セッションの時間配分
・講義とワークのバランス
・休憩のタイミング
を含めて設計してください。</pre>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold text-lg text-sky-600 mb-3">スライド資料の原稿作成</h3>
                    <p class="text-gray-600 mb-4">スライドの構成と各ページの内容をAIで作成。</p>
                    <div class="bg-gray-800 text-gray-100 p-4 rounded text-sm">
                        <pre class="whitespace-pre-wrap">「電話応対の基本」について、研修スライド10枚分の原稿を作成してください。

以下の構成で：
1. タイトル
2-3. 電話応対の重要性
4-6. 基本の受け方（3つのポイント）
7-8. よくある失敗例と対策
9. 練習問題
10. まとめ

各スライドに箇条書き3-4点と、講師用のトークスクリプトも付けてください。</pre>
                    </div>
                </div>
            </div>
        </section>

        <!-- セクション2 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-sky-200">ケーススタディの作成</h2>

            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="font-bold text-sky-600 mb-3">プロンプト例</h3>
                <div class="bg-gray-800 text-gray-100 p-4 rounded text-sm">
                    <pre class="whitespace-pre-wrap">クレーム対応研修で使用するケーススタディを3つ作成してください。

【設定】小売店の店頭スタッフ向け

各ケースに以下を含めてください：
1. 状況説明（お客様の様子、発言内容）
2. 店員の立場・背景
3. 検討ポイント（3つ程度）
4. 模範対応例
5. NGな対応例とその理由

難易度を「初級」「中級」「上級」で分けてください。</pre>
                </div>
            </div>
        </section>

        <!-- セクション3 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-sky-200">マニュアル・手順書の作成</h2>

            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="font-bold text-sky-600 mb-3">プロンプト例</h3>
                <div class="bg-gray-800 text-gray-100 p-4 rounded text-sm">
                    <pre class="whitespace-pre-wrap">新入社員向けの「経費精算の手順」マニュアルを作成してください。

【システム】社内経費精算システム（Webブラウザからアクセス）

以下を含めてください：
1. 全体の流れ（フローチャート形式）
2. ステップバイステップの手順
3. よくある間違いと対処法
4. 承認フローの説明
5. FAQ（5問程度）

初めての人でも迷わないよう、具体的に書いてください。</pre>
                </div>
            </div>
        </section>

        <!-- セクション4 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-sky-200">教材作成のコツ</h2>

            <div class="grid md:grid-cols-2 gap-4">
                <div class="bg-white p-5 rounded-lg shadow">
                    <h3 class="font-bold text-sky-600 mb-2">1. 具体的に指示する</h3>
                    <p class="text-sm text-gray-600">対象者、目的、分量を明確に伝える。曖昧だと汎用的な内容になりがち。</p>
                </div>
                <div class="bg-white p-5 rounded-lg shadow">
                    <h3 class="font-bold text-sky-600 mb-2">2. 業界・社内用語を教える</h3>
                    <p class="text-sm text-gray-600">自社特有の用語やルールは事前に説明。リアリティが増す。</p>
                </div>
                <div class="bg-white p-5 rounded-lg shadow">
                    <h3 class="font-bold text-sky-600 mb-2">3. 段階的に作成する</h3>
                    <p class="text-sm text-gray-600">構成→各セクション詳細と段階を分けて精度向上。</p>
                </div>
                <div class="bg-white p-5 rounded-lg shadow">
                    <h3 class="font-bold text-sky-600 mb-2">4. 必ず人間がレビュー</h3>
                    <p class="text-sm text-gray-600">AIの出力は叩き台。自社に合わせて調整する。</p>
                </div>
            </div>
        </section>

        <!-- まとめ -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-sky-200">まとめ</h2>
            <div class="bg-sky-50 p-6 rounded-lg">
                <ul class="space-y-3">
                    <li class="flex items-start">
                        <span class="text-sky-600 mr-2">✓</span>
                        <span>カリキュラム、スライド、ケーススタディをAIで効率作成</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-sky-600 mr-2">✓</span>
                        <span>具体的な指示が高品質な出力のカギ</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-sky-600 mr-2">✓</span>
                        <span>AIの出力は叩き台として活用</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-sky-600 mr-2">✓</span>
                        <span>最終的には人間がレビュー・調整</span>
                    </li>
                </ul>
            </div>
        </section>

        <!-- ナビゲーション -->
        <div class="flex justify-between items-center pt-8 border-t">
            <a href="ai-training-tools.php" class="flex items-center text-gray-600 hover:text-sky-600">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                前へ：AI研修ツール
            </a>
            <a href="ai-assessment.php" class="flex items-center bg-sky-600 text-white px-6 py-3 rounded-lg hover:bg-sky-700">
                次へ：AI評価・テスト作成
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </a>
        </div>
    </main>

<?php include 'includes/footer.php'; ?>
