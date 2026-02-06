<?php
$page_title = '要件定義 - 実践プロジェクト - AI駆動開発 上級編 | AI Tech Stack';
$current_page = 'practice';
$extra_styles = '.code-block { background: #1e293b; color: #e2e8f0; }\n        .prompt-box { background: linear-gradient(135deg, #fef3c7 0%, #fde68a 100%); border-left: 4px solid #f59e0b; }';
$section_name = '第9部：実践プロジェクト';
$step_number = 31;
$total_steps = 36;

include 'includes/header.php';
include 'includes/progress.php';
?>
    <main class="container mx-auto px-6 py-12 max-w-4xl">
        <h1 class="text-4xl font-bold mb-8">実践プロジェクト：要件定義</h1>

        <div class="bg-purple-50 border-l-4 border-purple-500 p-6 mb-8">
            <p class="text-lg">リアルタイム同期対応のプロジェクト管理ツールを、AIと一緒に要件定義から構築します。</p>
        </div>

        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-purple-200">Claude Codeでプロジェクトを始める</h2>
            <div class="bg-white p-6 rounded-lg shadow">
                <p class="mb-4">まずプロジェクトフォルダを作成し、Claude Codeを起動します。Gitリポジトリを初期化しておくことで、Claude Codeがバージョン管理を活用しながら開発を進められます。</p>
                <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto mb-4">
<pre><span class="text-green-400"># プロジェクトフォルダを作成</span>
mkdir taskflow
cd taskflow

<span class="text-green-400"># Gitリポジトリを初期化</span>
git init

<span class="text-green-400"># Claude Codeを起動</span>
claude</pre>
                </div>
                <p class="text-sm text-gray-600">Claude Codeが起動したら、プロジェクトの要件をそのまま自然言語で伝えることができます。</p>
            </div>
        </section>

        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-purple-200">プロジェクト概要</h2>
            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="font-bold mb-4">作成するアプリ：TaskFlow</h3>
                <p class="mb-4">カンバン形式のプロジェクト管理ツール。複数ユーザーがリアルタイムで共同作業できる。</p>
                <div class="grid md:grid-cols-2 gap-4 text-sm">
                    <div>
                        <h4 class="font-bold mb-2">主要機能</h4>
                        <ul class="space-y-1">
                            <li>・カンバンボード（ドラッグ&ドロップ）</li>
                            <li>・リアルタイム同期</li>
                            <li>・チーム・メンバー管理</li>
                            <li>・タスクのコメント</li>
                        </ul>
                    </div>
                    <div>
                        <h4 class="font-bold mb-2">技術スタック</h4>
                        <ul class="space-y-1">
                            <li>・Frontend: Next.js 14</li>
                            <li>・Backend: FastAPI</li>
                            <li>・DB: MySQL</li>
                            <li>・リアルタイム: WebSocket</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-purple-200">AIと要件整理</h2>

            <div class="bg-indigo-50 border-l-4 border-indigo-500 p-4 rounded mb-6">
                <h4 class="font-bold mb-2 text-indigo-700">Claude Codeへの指示</h4>
                <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre>プロジェクト管理ツール「TaskFlow」の要件を整理してください。

【概要】
カンバン形式のタスク管理アプリ。リアルタイム同期対応。
複数ユーザーが同時に同じボードを操作できる。

以下を洗い出してください：
【ユーザーストーリー】主要なユースケースを網羅
【機能一覧】優先度（必須/Phase2/Phase3）付きで作成
【画面一覧】各画面の目的と主要UI要素を記載
【API一覧】RESTful APIのエンドポイント設計</pre>
                </div>
            </div>

            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="font-bold mb-4">Claude Codeが行うこと</h3>
                <p class="mb-4 text-sm text-gray-600">上記の指示を受けると、Claude Codeは以下の作業を自動的に進めます。</p>
                <ul class="space-y-3">
                    <li class="flex items-start">
                        <span class="text-green-500 mr-2 mt-1">&#10003;</span>
                        <div>
                            <span class="font-bold">要件の分析</span>
                            <p class="text-sm text-gray-600">指示内容を解析し、不足している要件や曖昧な点を洗い出します</p>
                        </div>
                    </li>
                    <li class="flex items-start">
                        <span class="text-green-500 mr-2 mt-1">&#10003;</span>
                        <div>
                            <span class="font-bold">ユーザーストーリーの生成</span>
                            <p class="text-sm text-gray-600">「〇〇として、△△したい。なぜなら□□だから」の形式で具体的なストーリーを作成します</p>
                        </div>
                    </li>
                    <li class="flex items-start">
                        <span class="text-green-500 mr-2 mt-1">&#10003;</span>
                        <div>
                            <span class="font-bold">機能一覧の作成</span>
                            <p class="text-sm text-gray-600">MVP（最小限の実用的な製品）に必要な機能を優先度付きでリストアップします</p>
                        </div>
                    </li>
                    <li class="flex items-start">
                        <span class="text-green-500 mr-2 mt-1">&#10003;</span>
                        <div>
                            <span class="font-bold">画面・APIエンドポイントの設計</span>
                            <p class="text-sm text-gray-600">画面遷移とRESTful APIのエンドポイントを一覧として整理します</p>
                        </div>
                    </li>
                </ul>
            </div>
        </section>

        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-purple-200">機能一覧（MVP）</h2>
            <div class="bg-white p-6 rounded-lg shadow overflow-x-auto">
                <table class="w-full text-sm">
                    <thead class="bg-gray-100">
                        <tr>
                            <th class="p-3 text-left">機能</th>
                            <th class="p-3 text-left">説明</th>
                            <th class="p-3 text-left">優先度</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-b"><td class="p-3">ユーザー認証</td><td class="p-3">登録・ログイン</td><td class="p-3"><span class="bg-red-100 text-red-700 px-2 py-1 rounded">必須</span></td></tr>
                        <tr class="border-b"><td class="p-3">プロジェクト作成</td><td class="p-3">ボードの作成・編集</td><td class="p-3"><span class="bg-red-100 text-red-700 px-2 py-1 rounded">必須</span></td></tr>
                        <tr class="border-b"><td class="p-3">タスクCRUD</td><td class="p-3">作成・編集・削除</td><td class="p-3"><span class="bg-red-100 text-red-700 px-2 py-1 rounded">必須</span></td></tr>
                        <tr class="border-b"><td class="p-3">ドラッグ&ドロップ</td><td class="p-3">タスクの移動</td><td class="p-3"><span class="bg-red-100 text-red-700 px-2 py-1 rounded">必須</span></td></tr>
                        <tr class="border-b"><td class="p-3">リアルタイム同期</td><td class="p-3">WebSocketで即時反映</td><td class="p-3"><span class="bg-red-100 text-red-700 px-2 py-1 rounded">必須</span></td></tr>
                        <tr><td class="p-3">コメント機能</td><td class="p-3">タスクへのコメント</td><td class="p-3"><span class="bg-yellow-100 text-yellow-700 px-2 py-1 rounded">Phase2</span></td></tr>
                    </tbody>
                </table>
            </div>
        </section>

        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-purple-200">Claude Codeに要件ドキュメントを作成させる</h2>

            <div class="bg-indigo-50 border-l-4 border-indigo-500 p-4 rounded mb-6">
                <h4 class="font-bold mb-2 text-indigo-700">Claude Codeへの指示</h4>
                <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre>TaskFlowプロジェクトのREADME.mdを作成してください。
プロジェクト概要、技術スタック、機能一覧（MVP）、
セットアップ手順のセクションを含めてください。</pre>
                </div>
            </div>

            <div class="bg-white p-6 rounded-lg shadow">
                <p class="mb-4">README.mdを先に作ることで、プロジェクトの全体像をClaude Codeと共有できます。以降の開発でClaude Codeに指示を出す際、README.mdの内容がコンテキストとして自動的に参照されるため、一貫性のあるコード生成が期待できます。</p>
                <div class="bg-gray-50 p-4 rounded text-sm">
                    <h4 class="font-bold mb-2">README.mdに含めるべき情報</h4>
                    <ul class="space-y-1">
                        <li>&#10003; プロジェクト名と概要説明</li>
                        <li>&#10003; 使用する技術スタック（Next.js, FastAPI, MySQL, WebSocket）</li>
                        <li>&#10003; MVP機能の一覧と優先度</li>
                        <li>&#10003; ローカル環境のセットアップ手順</li>
                        <li>&#10003; ディレクトリ構成の概要</li>
                    </ul>
                </div>
            </div>
        </section>

        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-purple-200">次のステップ</h2>
            <div class="bg-purple-50 p-6 rounded-lg">
                <p class="mb-2">要件が整理できたら、次はアーキテクチャを設計します。Claude Codeと一緒に技術選定とディレクトリ構成を決定し、フロントエンドとバックエンドの責務分担を明確にしましょう。</p>
                <p class="text-sm text-gray-600">要件定義ドキュメント（README.md）があることで、アーキテクチャ設計時にもClaude Codeが一貫した提案を行えます。</p>
            </div>
        </section>

        <div class="flex justify-between items-center pt-8 border-t">
            <a href="git-ai.php" class="flex items-center text-gray-600 hover:text-purple-600">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                Git操作の効率化
            </a>
            <a href="project-architecture.php" class="flex items-center bg-purple-500 text-white px-6 py-3 rounded-lg hover:bg-purple-600">
                次へ：アーキテクチャ決定
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
            </a>
        </div>
    </main>


<?php include 'includes/footer.php'; ?>
