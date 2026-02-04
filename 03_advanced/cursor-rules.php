<?php
$page_title = 'Cursor Rules活用 - AI駆動開発 上級編 | AI Tech Stack';
$current_page = 'mcp';
$extra_styles = '.code-block { background: #1e293b; color: #e2e8f0; }\n        .prompt-box { background: linear-gradient(135deg, #fef3c7 0%, #fde68a 100%); border-left: 4px solid #f59e0b; }';
$section_name = '第7部：AIツールの拡張';
$step_number = 26;
$total_steps = 36;

include 'includes/header.php';
include 'includes/progress.php';
?>
    <main class="container mx-auto px-6 py-12 max-w-4xl">
        <h1 class="text-4xl font-bold mb-8">Cursor Rules活用</h1>

        <div class="bg-orange-50 border-l-4 border-orange-500 p-6 mb-8">
            <p class="text-lg">Cursor の .cursorrules ファイルで、プロジェクト固有のAI動作ルールを定義します。</p>
        </div>

        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-orange-200">.cursorrules とは</h2>
            <div class="bg-white p-6 rounded-lg shadow">
                <p class="mb-4">プロジェクトルートに配置するファイルで、AIの振る舞いをカスタマイズできます。</p>
                <ul class="text-sm space-y-2">
                    <li>・プロジェクトのコーディング規約を伝える</li>
                    <li>・使用技術スタックを明示</li>
                    <li>・避けるべきパターンを指定</li>
                </ul>
            </div>
        </section>

        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-orange-200">設定例</h2>

            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="font-bold mb-3">.cursorrules</h3>
                <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre>You are working on a full-stack web application.

## Tech Stack
- Frontend: Next.js 14 (App Router), TypeScript, Tailwind CSS
- Backend: FastAPI, SQLAlchemy, MySQL
- Testing: pytest, Playwright

## Coding Standards
- Use TypeScript strict mode
- Always add type hints in Python
- Use functional components with hooks (no class components)
- Prefer Server Components in Next.js

## File Structure
- Frontend routes: frontend/src/app/
- API routes: backend/app/api/
- Shared types: frontend/src/types/

## Important
- Never use `any` type in TypeScript
- Always handle errors explicitly
- Use environment variables for secrets
- Write tests for new features</pre>
                </div>
            </div>
        </section>

        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-orange-200">AIに作成を依頼</h2>

            <div class="prompt-box p-4 rounded mb-6">
                <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre>このプロジェクトに適した .cursorrules ファイルを作成してください。

【プロジェクト概要】
- Next.js + FastAPI のフルスタックアプリ
- TypeScript strict モード
- テストは pytest と Playwright

【規約】
- any 禁止
- エラーは明示的にハンドリング
- Tailwind CSS を使用</pre>
                </div>
            </div>
        </section>

        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-orange-200">まとめ</h2>
            <div class="bg-orange-50 p-6 rounded-lg">
                <ul class="space-y-3">
                    <li class="flex items-start"><span class="text-orange-600 mr-2">✓</span><span><strong>.cursorrules</strong> - プロジェクト固有のAI設定</span></li>
                    <li class="flex items-start"><span class="text-orange-600 mr-2">✓</span><span><strong>規約を明示</strong> - AIが一貫したコードを生成</span></li>
                    <li class="flex items-start"><span class="text-orange-600 mr-2">✓</span><span><strong>チームで共有</strong> - Gitで管理してチーム統一</span></li>
                </ul>
            </div>
        </section>

        <div class="flex justify-between items-center pt-8 border-t">
            <a href="claude-code-hooks.php" class="flex items-center text-gray-600 hover:text-orange-600">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                Claude Code Hooks
            </a>
            <a href="ai-documentation.php" class="flex items-center bg-orange-500 text-white px-6 py-3 rounded-lg hover:bg-orange-600">
                次へ：AIでドキュメント生成
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
            </a>
        </div>
    </main>

    
<?php include 'includes/footer.php'; ?>
