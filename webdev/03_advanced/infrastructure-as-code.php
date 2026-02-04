<?php
$page_title = 'インフラ設定の自動化 - AI駆動開発 上級編 | AI Tech Stack';
$current_page = 'testing';
$extra_styles = '.code-block { background: #1e293b; color: #e2e8f0; }\n        .prompt-box { background: linear-gradient(135deg, #fef3c7 0%, #fde68a 100%); border-left: 4px solid #f59e0b; }';
$section_name = '第6部：AIとDevOps';
$step_number = 21;
$total_steps = 36;

include 'includes/header.php';
include 'includes/progress.php';
?>
    <main class="container mx-auto px-6 py-12 max-w-4xl">
        <h1 class="text-4xl font-bold mb-8">インフラ設定の自動化</h1>

        <div class="bg-orange-50 border-l-4 border-orange-500 p-6 mb-8">
            <p class="text-lg">Terraform等のIaCツールをAIと一緒に書くことで、インフラをコードで管理します。</p>
        </div>

        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-orange-200">Infrastructure as Code (IaC) とは</h2>
            <div class="bg-white p-6 rounded-lg shadow">
                <ul class="space-y-2 text-sm">
                    <li>・インフラ構成をコードで定義</li>
                    <li>・バージョン管理可能</li>
                    <li>・再現性のある環境構築</li>
                    <li>・レビュー可能</li>
                </ul>
            </div>
        </section>

        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-orange-200">TerraformをAIと書く</h2>

            <div class="prompt-box p-4 rounded mb-6">
                <h4 class="font-bold mb-2">AIへの指示</h4>
                <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre>AWS上に以下の構成をTerraformで構築してください。

【要件】
- VPC + サブネット（パブリック2つ、プライベート2つ）
- ECS Fargate でコンテナ実行
- RDS MySQL（プライベートサブネット）
- ALB でロードバランシング

ベストプラクティスに従って、モジュール化してください。</pre>
                </div>
            </div>

            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="font-bold mb-3">生成例（抜粋）</h3>
                <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre># main.tf
module "vpc" {
  source = "./modules/vpc"
  cidr   = "10.0.0.0/16"
}

module "ecs" {
  source     = "./modules/ecs"
  vpc_id     = module.vpc.vpc_id
  subnet_ids = module.vpc.private_subnet_ids
}

module "rds" {
  source     = "./modules/rds"
  vpc_id     = module.vpc.vpc_id
  subnet_ids = module.vpc.private_subnet_ids
}</pre>
                </div>
            </div>
        </section>

        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-orange-200">まとめ</h2>
            <div class="bg-orange-50 p-6 rounded-lg">
                <ul class="space-y-3">
                    <li class="flex items-start"><span class="text-orange-600 mr-2">✓</span><span><strong>IaCで再現性</strong> - 同じ環境を何度でも構築可能</span></li>
                    <li class="flex items-start"><span class="text-orange-600 mr-2">✓</span><span><strong>モジュール化</strong> - 再利用可能な単位で分割</span></li>
                    <li class="flex items-start"><span class="text-orange-600 mr-2">✓</span><span><strong>AIに相談</strong> - ベストプラクティスを提案させる</span></li>
                </ul>
            </div>
        </section>

        <div class="flex justify-between items-center pt-8 border-t">
            <a href="docker-optimization.php" class="flex items-center text-gray-600 hover:text-orange-600">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                Dockerfileの最適化
            </a>
            <a href="incident-response.php" class="flex items-center bg-orange-500 text-white px-6 py-3 rounded-lg hover:bg-orange-600">
                次へ：障害対応とデバッグ
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
            </a>
        </div>
    </main>

    
<?php include 'includes/footer.php'; ?>
