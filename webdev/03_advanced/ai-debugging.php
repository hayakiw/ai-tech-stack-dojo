<?php
$page_title = 'バグ修正の効率化 - AI駆動開発 上級編 | AI Tech Stack';
$current_page = 'testing';
$extra_styles = '.code-block { background: #1e293b; color: #e2e8f0; }\n        .prompt-box { background: linear-gradient(135deg, #fef3c7 0%, #fde68a 100%); border-left: 4px solid #f59e0b; }';
$section_name = '第5部：AIとテスト・品質管理';
$step_number = 18;
$total_steps = 36;

include 'includes/header.php';
include 'includes/progress.php';
?>
    <main class="container mx-auto px-6 py-12 max-w-4xl">
        <h1 class="text-4xl font-bold mb-8">バグ修正の効率化</h1>

        <div class="bg-orange-50 border-l-4 border-orange-500 p-6 mb-8">
            <p class="text-lg">エラーログやスタックトレースをAIに分析させ、原因特定から修正までを効率的に行います。</p>
        </div>

        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-orange-200">エラー分析の依頼</h2>

            <div class="prompt-box p-4 rounded mb-6">
                <h4 class="font-bold mb-2">スタックトレースを渡す</h4>
                <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre>以下のエラーの原因と修正方法を教えてください。

【エラーメッセージ】
TypeError: Cannot read properties of undefined (reading 'map')
    at UserList (src/components/UserList.tsx:15)
    at renderWithHooks (react-dom.development.js:14985)

【関連コード】
```tsx
const UserList = ({ users }) => {
  return users.map(user => <div>{user.name}</div>);
};
```

【状況】
- APIからのレスポンスを待っている間に発生
- 最初のレンダリング時のみ発生</pre>
                </div>
            </div>

            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="font-bold mb-3">AIの回答例</h3>
                <div class="space-y-2 text-sm">
                    <div class="p-3 bg-gray-50 rounded">
                        <span class="font-bold">原因:</span> 初期状態で users が undefined のため、map を呼び出せない
                    </div>
                    <div class="p-3 bg-green-50 rounded">
                        <span class="font-bold">修正:</span>
                        <code>users?.map()</code> またはデフォルト値 <code>users = []</code> を設定
                    </div>
                </div>
            </div>
        </section>

        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-orange-200">Claude Code でのデバッグ</h2>

            <div class="bg-white p-6 rounded-lg shadow">
                <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre># エラーをそのまま貼り付け
> このエラーを修正してください:
> [エラーメッセージをペースト]

# ログファイルを分析
> @logs/error.log このログのエラー原因を分析してください

# 特定の問題を調査
> ユーザー登録で500エラーが出ます。原因を調べてください</pre>
                </div>
            </div>
        </section>

        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-orange-200">再現手順から原因特定</h2>

            <div class="prompt-box p-4 rounded mb-6">
                <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre>以下の再現手順でバグが発生します。原因を特定してください。

【再現手順】
1. ログインする
2. タスク一覧を開く
3. タスクを削除する
4. 画面をリロードする
5. 削除したはずのタスクが表示される

【期待動作】
削除したタスクは表示されない

【関連ファイル】
- backend/app/api/tasks.py
- frontend/src/features/tasks/api.ts</pre>
                </div>
            </div>
        </section>

        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-orange-200">まとめ</h2>
            <div class="bg-orange-50 p-6 rounded-lg">
                <ul class="space-y-3">
                    <li class="flex items-start"><span class="text-orange-600 mr-2">✓</span><span><strong>エラー全体を渡す</strong> - スタックトレース、状況、コードをセットで</span></li>
                    <li class="flex items-start"><span class="text-orange-600 mr-2">✓</span><span><strong>再現手順を明確に</strong> - いつ、どの操作で発生するか</span></li>
                    <li class="flex items-start"><span class="text-orange-600 mr-2">✓</span><span><strong>修正後はテスト</strong> - 同じエラーが出ないことを確認</span></li>
                </ul>
            </div>
        </section>

        <div class="flex justify-between items-center pt-8 border-t">
            <a href="ai-code-review.php" class="flex items-center text-gray-600 hover:text-orange-600">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                AIコードレビュー
            </a>
            <a href="ci-cd.php" class="flex items-center bg-orange-500 text-white px-6 py-3 rounded-lg hover:bg-orange-600">
                次へ：CI/CDパイプライン構築
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
            </a>
        </div>
    </main>

    
<?php include 'includes/footer.php'; ?>
