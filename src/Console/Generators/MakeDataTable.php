<?php namespace WebEd\Base\ThemesManagement\Console\Generators;

class MakeDataTable extends AbstractGenerator
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'theme:make:datatable
    	{name : The class name}';

    /**
     * The type of class being generated.
     *
     * @var string
     */
    protected $type = 'Datatable helper';

    /**
     * Get the stub file for the generator.
     *
     * @return string
     */
    protected function getStub()
    {
        return __DIR__ . '/../../../resources/stubs/datatables/datatable.stub';
    }

    protected function getDefaultNamespace($rootNamespace)
    {
        return 'Http\\DataTables\\' . $this->argument('name');
    }
}
