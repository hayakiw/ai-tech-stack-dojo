<?php
$page_title = '用語集 - AI×業務自動化 | AI Tech Stack';
$current_page = 'support';
$section_name = '第4部：応用とサポート';
$step_number = 14;
$total_steps = 14;

include 'includes/header.php';
include 'includes/progress.php';
?>

    <!-- メインコンテンツ -->
    <main class="container mx-auto px-6 py-12 max-w-4xl">
        <h1 class="text-4xl font-bold mb-8">用語集</h1>

        <!-- イントロ -->
        <div class="bg-violet-50 border-l-4 border-violet-500 p-6 mb-8">
            <p class="text-lg">業務自動化で使われる用語をまとめました。わからない言葉があったら、ここで確認してください。</p>
        </div>

        <!-- 目次 -->
        <div class="bg-white p-6 rounded-lg shadow mb-8">
            <h2 class="font-bold mb-4">カテゴリ</h2>
            <div class="flex flex-wrap gap-2">
                <a href="#basics" class="bg-violet-100 text-violet-700 px-3 py-1 rounded hover:bg-violet-200">自動化基礎</a>
                <a href="#tools" class="bg-purple-100 text-purple-700 px-3 py-1 rounded hover:bg-purple-200">ツール関連</a>
                <a href="#ai" class="bg-fuchsia-100 text-fuchsia-700 px-3 py-1 rounded hover:bg-fuchsia-200">AI関連</a>
                <a href="#workflow" class="bg-pink-100 text-pink-700 px-3 py-1 rounded hover:bg-pink-200">ワークフロー</a>
            </div>
        </div>

        <!-- 自動化基礎 -->
        <section id="basics" class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-violet-200">自動化基礎</h2>

            <div class="space-y-4">
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold text-violet-600">RPA（Robotic Process Automation）</h3>
                    <p class="text-sm text-gray-600 mt-1">ソフトウェアロボットがPC操作を自動化する技術。マウスクリック、キーボード入力を再現。</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold text-violet-600">ノーコード</h3>
                    <p class="text-sm text-gray-600 mt-1">プログラミング不要でアプリやワークフローを作成できる手法・ツール。</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold text-violet-600">ローコード</h3>
                    <p class="text-sm text-gray-600 mt-1">最小限のコーディングで開発できる手法。ノーコードより柔軟性が高い。</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold text-violet-600">DX（デジタルトランスフォーメーション）</h3>
                    <p class="text-sm text-gray-600 mt-1">デジタル技術を活用してビジネスモデルや業務プロセスを変革すること。</p>
                </div>
            </div>
        </section>

        <!-- ツール関連 -->
        <section id="tools" class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-purple-200">ツール関連</h2>

            <div class="space-y-4">
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold text-purple-600">Zapier</h3>
                    <p class="text-sm text-gray-600 mt-1">5,000以上のアプリを連携できる自動化プラットフォーム。ノーコードで設定可能。</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold text-purple-600">Make（旧Integromat）</h3>
                    <p class="text-sm text-gray-600 mt-1">視覚的なフロー設計が得意な自動化ツール。複雑な条件分岐に対応。</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold text-purple-600">Power Automate</h3>
                    <p class="text-sm text-gray-600 mt-1">Microsoft製の自動化ツール。Office 365との連携が強力。</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold text-purple-600">Google Apps Script</h3>
                    <p class="text-sm text-gray-600 mt-1">Googleサービスを自動化するスクリプト言語。無料で利用可能。</p>
                </div>
            </div>
        </section>

        <!-- AI関連 -->
        <section id="ai" class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-fuchsia-200">AI関連</h2>

            <div class="space-y-4">
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold text-fuchsia-600">生成AI</h3>
                    <p class="text-sm text-gray-600 mt-1">テキスト、画像、コードなどを自動生成できるAI。ChatGPT、Claude、Geminiなど。</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold text-fuchsia-600">プロンプト</h3>
                    <p class="text-sm text-gray-600 mt-1">AIに与える指示文。プロンプトの質がAIの出力品質を左右する。</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold text-fuchsia-600">API</h3>
                    <p class="text-sm text-gray-600 mt-1">Application Programming Interface。ソフトウェア同士を連携させる仕組み。</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold text-fuchsia-600">LLM（大規模言語モデル）</h3>
                    <p class="text-sm text-gray-600 mt-1">大量のテキストデータで学習したAIモデル。自然な文章を理解・生成できる。</p>
                </div>
            </div>
        </section>

        <!-- ワークフロー -->
        <section id="workflow" class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-pink-200">ワークフロー</h2>

            <div class="space-y-4">
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold text-pink-600">トリガー</h3>
                    <p class="text-sm text-gray-600 mt-1">ワークフローを開始するきっかけ。メール受信、時間指定、フォーム送信など。</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold text-pink-600">アクション</h3>
                    <p class="text-sm text-gray-600 mt-1">ワークフロー内で実行される処理。データ取得、メール送信、ファイル作成など。</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold text-pink-600">条件分岐</h3>
                    <p class="text-sm text-gray-600 mt-1">条件に応じて処理を分ける仕組み。IF-THEN-ELSE形式。</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold text-pink-600">Webhook</h3>
                    <p class="text-sm text-gray-600 mt-1">イベント発生時に他のシステムへ通知を送る仕組み。リアルタイム連携に使用。</p>
                </div>
            </div>
        </section>

        <!-- コース完了 -->
        <section class="mb-12">
            <div class="bg-gradient-to-r from-violet-500 to-purple-500 text-white p-8 rounded-lg text-center">
                <span class="text-5xl mb-4 block">🎉</span>
                <h2 class="text-2xl font-bold mb-4">おめでとうございます！</h2>
                <p class="mb-6">AI×業務自動化コースを完了しました。<br>学んだことを活かして、業務効率化を実現しましょう！</p>
                <a href="index.php" class="inline-block bg-white text-violet-600 px-8 py-3 rounded-lg font-bold hover:bg-gray-100 transition">トップページに戻る</a>
            </div>
        </section>

        <!-- ナビゲーション -->
        <div class="flex justify-between items-center pt-8 border-t">
            <a href="next-steps.php" class="flex items-center text-gray-600 hover:text-violet-600">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                前へ：次のステップ
            </a>
            <a href="index.php" class="flex items-center bg-violet-600 text-white px-6 py-3 rounded-lg hover:bg-violet-700">
                トップページへ
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                </svg>
            </a>
        </div>
    </main>

<?php include 'includes/footer.php'; ?>
