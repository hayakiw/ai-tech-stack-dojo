<?php
$page_title = 'Dockerfileの最適化 - AI駆動開発 上級編 | AI Tech Stack';
$current_page = 'testing';
$extra_styles = '.code-block { background: #1e293b; color: #e2e8f0; }\n        .prompt-box { background: linear-gradient(135deg, #fef3c7 0%, #fde68a 100%); border-left: 4px solid #f59e0b; }';
$section_name = '第6部：AIとDevOps';
$step_number = 20;
$total_steps = 36;

include 'includes/header.php';
include 'includes/progress.php';
?>
    <main class="container mx-auto px-6 py-12 max-w-4xl">
        <h1 class="text-4xl font-bold mb-8">Dockerfileの最適化</h1>

        <div class="bg-orange-50 border-l-4 border-orange-500 p-6 mb-8">
            <p class="text-lg">AIにDockerfileの最適化を依頼し、ビルド時間短縮とイメージサイズ削減を実現します。</p>
        </div>

        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-orange-200">マルチステージビルド</h2>

            <div class="prompt-box p-4 rounded mb-6">
                <h4 class="font-bold mb-2">AIへの指示</h4>
                <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre>以下のDockerfileをマルチステージビルドで最適化してください。
イメージサイズを最小化し、ビルドキャッシュを活用してください。

```dockerfile
FROM python:3.11
WORKDIR /app
COPY . .
RUN pip install -r requirements.txt
CMD ["uvicorn", "main:app", "--host", "0.0.0.0"]
```</pre>
                </div>
            </div>

            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="font-bold mb-3">最適化後</h3>
                <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre># ビルドステージ
FROM python:3.11-slim as builder
WORKDIR /app
COPY requirements.txt .
RUN pip install --user -r requirements.txt

# 実行ステージ
FROM python:3.11-slim
WORKDIR /app
COPY --from=builder /root/.local /root/.local
COPY . .
ENV PATH=/root/.local/bin:$PATH
CMD ["uvicorn", "main:app", "--host", "0.0.0.0"]</pre>
                </div>
                <div class="mt-4 text-sm">
                    <span class="text-green-600 font-bold">効果:</span> イメージサイズ 1.2GB → 250MB
                </div>
            </div>
        </section>

        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-orange-200">レイヤーキャッシュの活用</h2>
            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="font-bold mb-3">順序の最適化</h3>
                <div class="grid md:grid-cols-2 gap-4 text-sm">
                    <div class="p-3 bg-red-50 rounded">
                        <h4 class="font-bold text-red-600">NG: キャッシュが効かない</h4>
                        <code>COPY . .</code> → <code>RUN pip install</code>
                    </div>
                    <div class="p-3 bg-green-50 rounded">
                        <h4 class="font-bold text-green-600">OK: キャッシュが効く</h4>
                        <code>COPY requirements.txt</code> → <code>RUN pip install</code> → <code>COPY . .</code>
                    </div>
                </div>
            </div>
        </section>

        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-orange-200">まとめ</h2>
            <div class="bg-orange-50 p-6 rounded-lg">
                <ul class="space-y-3">
                    <li class="flex items-start"><span class="text-orange-600 mr-2">✓</span><span><strong>マルチステージ</strong> - ビルド成果物のみを実行イメージへ</span></li>
                    <li class="flex items-start"><span class="text-orange-600 mr-2">✓</span><span><strong>slim/alpine</strong> - 軽量ベースイメージを使用</span></li>
                    <li class="flex items-start"><span class="text-orange-600 mr-2">✓</span><span><strong>レイヤー順序</strong> - 変更頻度の低いものを先に</span></li>
                </ul>
            </div>
        </section>

        <div class="flex justify-between items-center pt-8 border-t">
            <a href="ci-cd.php" class="flex items-center text-gray-600 hover:text-orange-600">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                CI/CDパイプライン構築
            </a>
            <a href="infrastructure-as-code.php" class="flex items-center bg-orange-500 text-white px-6 py-3 rounded-lg hover:bg-orange-600">
                次へ：インフラ設定の自動化
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
            </a>
        </div>
    </main>

    
<?php include 'includes/footer.php'; ?>
