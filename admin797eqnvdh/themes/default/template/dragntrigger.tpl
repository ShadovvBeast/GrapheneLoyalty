{*
* 2007-2015 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author PrestaShop SA <contact@prestashop.com>
*  @copyright  2007-2015 PrestaShop SA
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}
<div id="dragntrigger" class="bootstrap">
    <div id="myDiagramContainer">
        <div id="myDiagramBuilder"></div>
    </div>

    <script>
        {literal}
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
        );{/literal}
        function saveDiagram()
        {
            var id_diagram = {$id_diagram};
            alert(id_diagram);
            var json = dgBuilder.toJSON();
            var sJson = JSON.stringify(json);
            //$.post("",)
        }
    </script>
    <button onclick='saveDiagram();'>Save</button>
</div>