<?php /* Smarty version Smarty-3.1.19, created on 2015-11-28 17:10:00
         compiled from "D:\Just-Things\wamp\www\PrestaShop\admin797eqnvdh\themes\default\template\dragntrigger.tpl" */ ?>
<?php /*%%SmartyHeaderCode:28809564ddb55a3f0c3-93338735%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2516f4d1db3e200e77448a252ab299dc3715f7a4' => 
    array (
      0 => 'D:\\Just-Things\\wamp\\www\\PrestaShop\\admin797eqnvdh\\themes\\default\\template\\dragntrigger.tpl',
      1 => 1448723348,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28809564ddb55a3f0c3-93338735',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_564ddb55a6aa52_90656505',
  'variables' => 
  array (
    'id_diagram' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564ddb55a6aa52_90656505')) {function content_564ddb55a6aa52_90656505($_smarty_tpl) {?>
<div id="dragntrigger" class="bootstrap">
    <div id="myDiagramContainer">
        <div id="myDiagramBuilder"></div>
    </div>

    <script>
        
        var dgBuilder = null;
        var Yref = null;
        YUI({filter: 'raw'}).use(
                'aui-diagram-builder',
                function(Y) {

                    Y.DiagramNodeGroupStart = Y.Component.create({
                        NAME: 'diagram-node',

                        ATTRS: {
                            type: {
                                value: 'groupstart'
                            },
                            group: {
                                validator: Y.Lang.isString
                            }
                        },

                        EXTENDS: Y.DiagramNodeStart,

                        prototype: {
                            getPropertyModel: function () {
                                var instance = this;

                                var model = Y.DiagramNodeCondition.superclass.getPropertyModel.apply(instance, arguments);

                                model.push({
                                    attributeName: 'group',
                                    name: 'Affected Group'
                                });
                                Y.DiagramNodeCondition.superclass.SERIALIZABLE_ATTRS.push('group');
                                return model;
                            }
                        }

                    });

                    Y.DiagramNodeSMSTask = Y.Component.create({
                        NAME: 'diagram-node',

                        ATTRS: {
                            type: {
                                value: 'smstask'
                            },
                            sms: {
                                validator: Y.Lang.isString
                            }
                        },

                        EXTENDS: Y.DiagramNodeTask,

                        prototype: {
                            getPropertyModel: function () {
                                var instance = this;

                                var model = Y.DiagramNodeTask.superclass.getPropertyModel.apply(instance, arguments);

                                model.push({
                                    attributeName: 'sms',
                                    name: 'SMS Message'
                                });
                                Y.DiagramNodeTask.superclass.SERIALIZABLE_ATTRS.push('sms');
                                return model;
                            }
                        }

                    });
                    Y.DiagramBuilder.types['groupstart'] = Y.DiagramNodeGroupStart;
                    Y.DiagramBuilder.types['sms'] = Y.DiagramNodeSMSTask;
                    var availableFields = [
                        {
                            iconClass: 'diagram-node-start-icon',
                            label: 'Group Start',
                            type: 'groupstart'
                        },
                        {
                            iconClass: 'diagram-node-task-icon',
                            label: 'SMS Task',
                            type: 'sms'
                        },
                        {
                            iconClass: 'diagram-node-condition-icon',
                            label: 'Condition',
                            type: 'condition'
                        },
                        {
                            iconClass: 'diagram-node-end-icon',
                            label: 'End',
                            type: 'end'
                        }

                    ];
                    dgBuilder = new Y.DiagramBuilder(
                            {
                                boundingBox: '#myDiagramContainer',
                                availableFields: availableFields,
                                fields: [
                                    {
                                        name: 'StartNode',
                                        type: 'groupstart',
                                        xy: [100, 10]
                                    }
                                ],
                                srcNode: '#myDiagramBuilder'
                            }
                    );
                    dgBuilder.render();
                    Yref = Y;
                }
        );
        function saveDiagram()
        {
            var id_diagram = <?php echo $_smarty_tpl->tpl_vars['id_diagram']->value;?>
;
            alert(id_diagram);
            var json = dgBuilder.toJSON();
            var sJson = JSON.stringify(json);
            //$.post("",)
        }
    </script>
    <button onclick='saveDiagram();'>Save</button>
</div><?php }} ?>
