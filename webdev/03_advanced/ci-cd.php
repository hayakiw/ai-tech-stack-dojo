<?php
$page_title = 'CI/CDパイプライン構築 - AI駆動開発 上級編 | AI Tech Stack';
$current_page = 'testing';
$extra_styles = '.code-block { background: #1e293b; color: #e2e8f0; }\n        .prompt-box { background: linear-gradient(135deg, #fef3c7 0%, #fde68a 100%); border-left: 4px solid #f59e0b; }';
$section_name = '第6部：AIとDevOps';
$step_number = 19;
$total_steps = 36;

include 'includes/header.php';
include 'includes/progress.php';
?>
    <main class="container mx-auto px-6 py-12 max-w-4xl">
        <h1 class="text-4xl font-bold mb-8">CI/CDパイプライン構築</h1>

        <div class="bg-orange-50 border-l-4 border-orange-500 p-6 mb-8">
            <p class="text-lg">GitHub Actionsを使ったCI/CDパイプラインをAIと一緒に構築します。テスト、ビルド、デプロイを自動化しましょう。</p>
        </div>

        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-orange-200">CI/CDとは</h2>
            <div class="grid md:grid-cols-2 gap-4">
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold text-blue-600 mb-2">CI（継続的インテグレーション）</h3>
                    <p class="text-sm">コード変更時に自動でテスト・ビルドを実行</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold text-green-600 mb-2">CD（継続的デリバリー）</h3>
                    <p class="text-sm">テスト通過後に自動でデプロイ</p>
                </div>
            </div>
        </section>

        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-orange-200">GitHub Actions の構築</h2>

            <div class="prompt-box p-4 rounded mb-6">
                <h4 class="font-bold mb-2">AIへの指示</h4>
                <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre>Next.js + FastAPI プロジェクトのCI/CDパイプラインを
GitHub Actionsで構築してください。

【要件】
- PR時: lint、テスト、型チェック
- main マージ時: 上記 + ビルド + Vercel/Railwayへデプロイ
- キャッシュを活用して高速化

フロントエンドとバックエンドは別ジョブで並列実行してください。</pre>
                </div>
            </div>

            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="font-bold mb-3">.github/workflows/ci.yml</h3>
                <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre>name: CI/CD

on:
  push:
    branches: [main]
  pull_request:
    branches: [main]

jobs:
  frontend:
    runs-on: ubuntu-latest
    steps:
      - uses: actions/checkout@v4
      - uses: actions/setup-node@v4
        with:
          node-version: '20'
          cache: 'npm'
          cache-dependency-path: frontend/package-lock.json
      - run: cd frontend && npm ci
      - run: cd frontend && npm run lint
      - run: cd frontend && npm run type-check
      - run: cd frontend && npm test

  backend:
    runs-on: ubuntu-latest
    steps:
      - uses: actions/checkout@v4
      - uses: actions/setup-python@v5
        with:
          python-version: '3.11'
          cache: 'pip'
      - run: cd backend && pip install -r requirements.txt
      - run: cd backend && pytest

  deploy:
    needs: [frontend, backend]
    if: github.ref == 'refs/heads/main'
    runs-on: ubuntu-latest
    steps:
      - uses: actions/checkout@v4
      # Vercel / Railway へのデプロイ</pre>
                </div>
            </div>
        </section>

        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-orange-200">シークレットの管理</h2>
            <div class="bg-white p-6 rounded-lg shadow">
                <p class="text-sm mb-4">環境変数やAPIキーはGitHubのSecretsで管理</p>
                <div class="code-block p-4 rounded font-mono text-sm">
<pre>env:
  DATABASE_URL: ${{ secrets.DATABASE_URL }}
  API_KEY: ${{ secrets.API_KEY }}</pre>
                </div>
            </div>
        </section>

        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-orange-200">まとめ</h2>
            <div class="bg-orange-50 p-6 rounded-lg">
                <ul class="space-y-3">
                    <li class="flex items-start"><span class="text-orange-600 mr-2">✓</span><span><strong>自動テスト</strong> - PR時に必ず実行</span></li>
                    <li class="flex items-start"><span class="text-orange-600 mr-2">✓</span><span><strong>並列実行</strong> - フロント/バックを同時に</span></li>
                    <li class="flex items-start"><span class="text-orange-600 mr-2">✓</span><span><strong>キャッシュ活用</strong> - 依存関係をキャッシュして高速化</span></li>
                </ul>
            </div>
        </section>

        <div class="flex justify-between items-center pt-8 border-t">
            <a href="ai-debugging.php" class="flex items-center text-gray-600 hover:text-orange-600">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                バグ修正の効率化
            </a>
            <a href="docker-optimization.php" class="flex items-center bg-orange-500 text-white px-6 py-3 rounded-lg hover:bg-orange-600">
                次へ：Dockerfileの最適化
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
            </a>
        </div>
    </main>

    
<?php include 'includes/footer.php'; ?>
