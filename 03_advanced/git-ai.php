<?php
$page_title = 'Git操作の効率化 - AI駆動開発 上級編 | AI Tech Stack';
$current_page = 'mcp';
$extra_styles = '.code-block { background: #1e293b; color: #e2e8f0; }\n        .prompt-box { background: linear-gradient(135deg, #fef3c7 0%, #fde68a 100%); border-left: 4px solid #f59e0b; }';
$section_name = '第8部：チーム開発でのAI活用';
$step_number = 30;
$total_steps = 36;

include 'includes/header.php';
include 'includes/progress.php';
?>
    <main class="container mx-auto px-6 py-12 max-w-4xl">
        <h1 class="text-4xl font-bold mb-8">Git操作の効率化</h1>

        <div class="bg-orange-50 border-l-4 border-orange-500 p-6 mb-8">
            <p class="text-lg">コミットメッセージの生成、PR作成、コンフリクト解消など、Git操作をAIで効率化します。</p>
        </div>

        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-orange-200">コミットメッセージ生成</h2>

            <div class="prompt-box p-4 rounded mb-6">
                <h4 class="font-bold mb-2">Claude Code で</h4>
                <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre># 差分からコミットメッセージを生成
> 変更内容を確認して、適切なコミットメッセージを提案してください

# Conventional Commits 形式で
> Conventional Commits 形式でコミットメッセージを作成してください
# 例: feat: ユーザー認証機能を追加</pre>
                </div>
            </div>
        </section>

        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-orange-200">PR説明文の作成</h2>

            <div class="prompt-box p-4 rounded mb-6">
                <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre>> このブランチの全コミットを確認して、
  PRのタイトルと説明文を作成してください。

  【フォーマット】
  ## 概要
  ## 変更内容
  ## テスト方法</pre>
                </div>
            </div>
        </section>

        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-orange-200">コンフリクト解消</h2>

            <div class="prompt-box p-4 rounded mb-6">
                <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre>> マージコンフリクトが発生しました。
  両方の変更を活かした形で解消してください。

  <<<<<<< HEAD
  (現在のブランチのコード)
  =======
  (マージ元のコード)
  >>>>>>> feature/xxx</pre>
                </div>
            </div>
        </section>

        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-orange-200">まとめ</h2>
            <div class="bg-orange-50 p-6 rounded-lg">
                <ul class="space-y-3">
                    <li class="flex items-start"><span class="text-orange-600 mr-2">✓</span><span><strong>コミットメッセージ</strong> - 差分から自動生成</span></li>
                    <li class="flex items-start"><span class="text-orange-600 mr-2">✓</span><span><strong>PR説明文</strong> - 変更内容をまとめる</span></li>
                    <li class="flex items-start"><span class="text-orange-600 mr-2">✓</span><span><strong>コンフリクト解消</strong> - 両方を活かした解決</span></li>
                </ul>
            </div>
        </section>

        <div class="flex justify-between items-center pt-8 border-t">
            <a href="onboarding.php" class="flex items-center text-gray-600 hover:text-orange-600">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                オンボーディング効率化
            </a>
            <a href="project-design.php" class="flex items-center bg-orange-500 text-white px-6 py-3 rounded-lg hover:bg-orange-600">
                次へ：実践プロジェクト - 要件定義
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
            </a>
        </div>
    </main>

    
<?php include 'includes/footer.php'; ?>
