<?php

namespace Saxum2010\Productimport;

use App\Console\Commands;

use Illuminate\Console\Command;

class ProductImportCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'import:products {filename}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Imports product based on csv file.';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $filename = $this->argument('filename');
        if ($this->confirm("Are you sure you want to run import?", true)) {
            $this->output->title('Starting import');
            (new ProductImport)->withOutput($this->output)->import($filename, 'local', \Maatwebsite\Excel\Excel::CSV);
            $this->output->success('Import successful');
        }
    }
}
